<?php
/**
 * 
 * @package RoyalMail Integeration
 * @subpackage M. Sufyan Shaikh
 * 
 */

function rmi_render_submissions()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_ticket_plugin';

    // Fetch all submissions
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

    // Check if there are results
    if (!$results) {
        echo '<div class="wrap"><h1>Submissions</h1><p>No submissions found.</p></div>';
        return;
    }

    // Display submissions in a table
    echo '<div class="wrap">';
    echo '<h1>Submissions</h1>';
    echo '<table class="widefat fixed striped">';
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>NHS Number</th>
                <th>Postcode</th>
                <th>High Risk Group</th>
                <th>Additional Comments</th>
                <th>Date</th>
            </tr>
          </thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        echo '<tr>
                <td>' . esc_html($row->id) . '</td>
                <td>' . esc_html($row->first_name) . '</td>
                <td>' . esc_html($row->last_name) . '</td>
                <td>' . esc_html($row->email) . '</td>
                <td>' . esc_html($row->nhs_number) . '</td>
                <td>' . esc_html($row->postcode) . '</td>
                <td>' . ($row->high_risk_group ? 'Yes' : 'No') . '</td>
                <td>' . esc_html($row->additional_comments) . '</td>
                <td>' . esc_html($row->created_at ?? 'N/A') . '</td>
              </tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}