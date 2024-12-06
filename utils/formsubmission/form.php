<?php
/**
 * 
 * @package RoyalMail Integeration
 * @subpackage M. Sufyan Shaikh
 * 
 */

function submit_rmi_form()
{
    check_ajax_referer('my-ajax-nonce', 'nonce');

    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_ticket_plugin';

    // Sanitize and prepare form data
    $data = [
        'applicant_type' => isset($_POST['applicant_type']) ? sanitize_text_field($_POST['applicant_type']) : '',
        'first_name' => isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '',
        'last_name' => isset($_POST['last_name']) ? sanitize_text_field($_POST['last_name']) : '',
        'email' => isset($_POST['email']) ? sanitize_email($_POST['email']) : '',
        'nhs_number' => isset($_POST['nhs_number']) ? sanitize_text_field($_POST['nhs_number']) : '',
        'date_of_birth' => isset($_POST['date_of_birth']) ? sanitize_text_field($_POST['date_of_birth']) : '',
        'postcode' => isset($_POST['postcode']) ? sanitize_text_field($_POST['postcode']) : '',
        'eligibility_confirm_method' => isset($_POST['eligibility_confirm_method']) ? maybe_serialize($_POST['eligibility_confirm_method']) : '',
        'high_risk_group' => isset($_POST['high_risk_group']) ? intval($_POST['high_risk_group']) : 0,
        'age_based_risk' => isset($_POST['age_based_risk']) ? sanitize_text_field($_POST['age_based_risk']) : '',
        'care_home_resident' => isset($_POST['care_home_resident']) ? sanitize_text_field($_POST['care_home_resident']) : '',
        'hospital_patient' => isset($_POST['hospital_patient']) ? sanitize_text_field($_POST['hospital_patient']) : '',
        'specific_health_condition' => isset($_POST['specific_health_condition']) ? sanitize_text_field($_POST['specific_health_condition']) : '',
        'other_health_considerations' => isset($_POST['other_health_considerations']) ? sanitize_text_field($_POST['other_health_considerations']) : '',
        'preferred_contact_method' => isset($_POST['preferred_contact_method']) ? sanitize_text_field($_POST['preferred_contact_method']) : '',
        'additional_comments' => isset($_POST['additional_comments']) ? sanitize_textarea_field($_POST['additional_comments']) : '',
    ];


    // Insert data into the table
    $inserted = $wpdb->insert($table_name, $data);

    if ($inserted === false) {
        error_log('Database Insert Error: ' . $wpdb->last_error);
        wp_send_json_error(['message' => 'Failed to submit request.']);
    } else {
        wp_send_json_success(['message' => 'Request submitted successfully!']);
    }

    wp_die();
}