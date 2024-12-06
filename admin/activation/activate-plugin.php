<?php
/**
 * 
 * @package RoyalMail Integeration
 * @subpackage M. Sufyan Shaikh
 * 
 */

function createAllTables()
{
    global $wpdb;
    $ctp_registered = "ctp_registered";
    if (get_option($ctp_registered) != null) {
        return;
    } else {
        try {
            $table_plugin = $wpdb->prefix . "custom_ticket_plugin";
            $charset_collate = $wpdb->get_charset_collate();

            $createTablePlugin = "CREATE TABLE $table_plugin  (
                id int(11) NOT NULL AUTO_INCREMENT,
                applicant_type varchar(50) NOT NULL, -- Patient or Representative
                first_name varchar(150) NOT NULL,
                last_name varchar(150) NOT NULL,
                email varchar(150) NOT NULL,
                nhs_number varchar(20), -- NHS Number (optional)
                date_of_birth date NOT NULL,
                postcode varchar(50) NOT NULL,
                eligibility_confirm_method text NOT NULL, -- Store multiple checkboxes
                high_risk_group tinyint(1) NOT NULL, -- Yes (1) or No (0)
                age_based_risk varchar(50), -- Dropdown selection
                care_home_resident varchar(150), -- Dropdown selection
                hospital_patient varchar(150), -- Dropdown selection
                specific_health_condition varchar(255), -- Dropdown selection
                other_health_considerations varchar(255), -- Dropdown selection
                preferred_contact_method varchar(50), -- Phone or Email
                additional_comments text, -- Additional comments or requests
                currentDate timestamp NOT NULL DEFAULT current_timestamp(),
                PRIMARY KEY  (id)
            ) $charset_collate;";

            require_once ABSPATH . "wp-admin/includes/upgrade.php";
            dbDelta($createTablePlugin);

        } catch (\Throwable $erro) {
            error_log($erro->getMessage());
            return $erro;
        }
        add_option($ctp_registered, true);
    }
}


function removeAllTables()
{
    $optionsToDelette = [
        "ctp_registered"
    ];

    global $wpdb;

    $table_plugin = $wpdb->prefix . "custom_ticket_plugin";

    try {
        $removal_pluginDatabase = "DROP TABLE IF EXISTS {$table_plugin}";
        $remResult2 = $wpdb->query($removal_pluginDatabase);

        foreach ($optionsToDelette as $options_value) {
            if (get_option($options_value)) {
                delete_option($options_value);
            }
        }

        return $remResult2;
    } catch (\Throwable $erro) {
        error_log($erro->getMessage());
        return $erro;
    }
}
