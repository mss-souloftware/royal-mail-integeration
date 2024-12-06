jQuery(document).ready(function ($) {
    $('#cardiologyForm').on('submit', function (e) {
        e.preventDefault();

        // Collect form data
        let formData = {
            action: 'submit_rmi_form',
            nonce: ajax_variables.nonce, // Pass nonce for security
            applicant_type: $('input[name="applicant_type"]:checked').val(),
            first_name: $('#fname').val(),
            last_name: $('#lname').val(),
            email: $('#pemail').val(),
            nhs_number: $('#nhsNumber').val(),
            date_of_birth: $('#dob').val(),
            postcode: $('#Postcode').val(),
            eligibility_confirm_method: $('input[name="eligibility_confirm_method[]"]:checked')
                .map(function () {
                    return $(this).val();
                })
                .get(),
            high_risk_group: $('input[name="high_risk_group"]:checked').val() || 0,
            age_based_risk: $('#age_based_risk').val(),
            care_home_resident: $('#care_home_resident').val(),
            hospital_patient: $('#hospital_patient').val(),
            specific_health_condition: $('#specific_health_condition').val(),
            other_health_considerations: $('#other_health_considerations').val(),
            preferred_contact_method: $('input[name="preferred_contact_method"]:checked').val(),
            additional_comments: $('#otherSymptoms').val(),
        };

        // Submit via AJAX
        $.ajax({
            url: ajax_variables.ajax_url,
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    alert(response.data.message);
                    $('#cardiologyForm')[0].reset(); // Reset the form
                } else {
                    alert(response.data.message);
                }
            },
            error: function () {
                alert('An error occurred while submitting the form.');
            },
        });
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('cardiologyForm');
    const sections = document.querySelectorAll('.form-section');
    const progressBar = document.querySelector('.progress');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    let currentSection = 0;

    function updateButtons() {
        prevBtn.style.display = currentSection === 0 ? 'none' : 'block';
        if (currentSection === sections.length - 1) {
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'block';
        } else {
            nextBtn.style.display = 'block';
            submitBtn.style.display = 'none';
        }
    }

    function updateProgress() {
        const progress = ((currentSection + 1) / sections.length) * 100;
        progressBar.style.width = `${progress}%`;
    }

    function showSection(sectionIndex) {
        sections.forEach((section, index) => {
            section.classList.toggle('active', index === sectionIndex);
        });
        updateButtons();
        updateProgress();
    }

    prevBtn.addEventListener('click', () => {
        if (currentSection > 0) {
            currentSection--;
            showSection(currentSection);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentSection < sections.length - 1) {
            currentSection++;
            showSection(currentSection);
        }
    });

    // form.addEventListener('submit', (e) => {
    //     e.preventDefault();
    //     // Add your form submission logic here
    //     alert('Form submitted successfully!');
    // });

    // Initialize
    updateButtons();
    updateProgress();
});