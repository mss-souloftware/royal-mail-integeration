<?php
/**
 * 
 * @package RoyalMail Integeration
 * @subpackage M. Sufyan Shaikh
 * 
*/

function rmi_frontend()
{
    ob_start(); ?>

<div id="cardiologyFormMain" class="formWrapper">
    <div class="container">
        <h2>NHS Lateral Flow Device (LFD) tests supply service for patients potentially eligible for COVID-19 treatments
        </h2>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <form id="cardiologyForm">
            <!-- Personal Information -->
            <div class="form-section active" data-section="1">
                <h3 class="section-title">Who is applying for the LFD?</h3>
                <p class="peraType"></p>
                <div class="form-group">
                    <div class="formFlex">
                        <input type="radio" id="patient" required>
                        <label for="patient">Patient <span>(I am submitting this application on my own behalf as the
                                patient).</span></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="formFlex">
                        <input type="radio" id="patientR" required>
                        <label for="patientR">Patient's representative <span> (I am submitting this application on
                                behalf of the patient as their representative).</span></label>
                    </div>
                </div>
            </div>

            <!-- Insurance Details -->
            <div class="form-section" data-section="2">
                <h3 class="section-title">Patient Details</h3>
                <p class="peraType">We ask for this information as it may be used for assurance purposes.</p>
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" required>
                </div>
                <div class="form-group">
                    <label for="pemail">Email Address</label>
                    <input type="email" id="pemail" required>
                </div>
                <div class="form-group">
                    <label for="nhsNumber">NHS Number (Optional)</label>
                    <span>For Example 485 777 3456.</span>
                    <input type="number" id="nhsNumber" required>
                </div>

                <div class="form-group">
                    <label for="nhsNumber">Date of Birth</label>
                    <input type="text" id="nhsNumber" required>
                </div>
            </div>

            <!-- Medical History -->
            <div class="form-section" data-section="3">
                <h3 class="section-title">What is the patient's address?</h3>
                <p class="peraType"></p>
                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" id="Postcode" required>
                </div>
            </div>

            <!-- Heart-Related Symptoms -->
            <div class="form-section" data-section="4">
                <h3 class="section-title">Eligibility</h3>
                <p class="peraType"></p>
                <h4>How have you confirmed your eligibility for the LFD test? </h4>
                <p class="peraType"></p>
                <div class="form-group">
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="chestPain">
                            <label for="chestPain">NHS Letter: I have an NHS letter confirming my eligibility for LFD
                                tests.</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="shortnessBreath">
                            <label for="shortnessBreath">Patient History: My medical history, provided by me or my
                                representative, confirms that I meet the eligibility criteria. (For example, chronic
                                health conditions or being in a high-risk group).</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="irregularHeartbeat">
                            <label for="irregularHeartbeat">National Care Records Service (NCRS) or Summary Care Record
                                (SCRa): I would like my eligibility confirmed through the NCRS or SCRa.</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="irregularHeartbeat">
                            <label for="irregularHeartbeat">Clinical Decision by Pharmacist: I would like a pharmacist
                                to assess my eligibility. (Please contact 0800 999 4888 if selecting this
                                option).</label>
                        </div>
                    </div>
                </div>
                <h4>Are you currently in a high-risk group eligible for COVID-19 treatment?</h4>
                <p class="peraType"></p>
                <div class="formFlex">
                    <div class="form-group">
                        <div class="formFlex">
                            <input type="radio" id="patientR" required>
                            <label for="patientR">Yes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="formFlex">
                            <input type="radio" id="patientR" required>
                            <label for="patientR">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alcohol">Age-Based Risk</label>
                    <select id="alcohol" required>
                        <option value="no">The patient is aged 85 years or older.</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alcohol">Care Home Residents</label>
                    <select id="alcohol" required>
                        <option value="aged-70-or-older">Aged 70 years or older and residing in a care home.</option>
                        <option value="bmi-35-or-higher">Residing in a care home with a BMI of 35 kg/m² or higher.
                        </option>
                        <option value="diabetes">Residing in a care home with diabetes.</option>
                        <option value="heart-failure">Residing in a care home with heart failure.</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alcohol">Hospital Patients</label>
                    <select id="alcohol" required>
                        <option value="hospitalised-70-or-older">Currently hospitalised and aged 70 years or older.
                        </option>
                        <option value="hospitalised-bmi-35-or-higher">Currently hospitalised with a BMI of 35 kg/m² or
                            higher.</option>
                        <option value="hospitalised-diabetes">Currently hospitalised with diabetes.</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alcohol">Specific Health Conditions</label>
                    <select id="alcohol" required>
                        <option value="heart-failure-ventricular-device">End-stage heart failure with a long-term
                            ventricular assistance device.</option>
                        <option value="organ-transplant-waiting-list">Currently on the organ transplant waiting list.
                        </option>
                        <option value="ckd-stage-4-or-5">Chronic kidney disease (CKD) stage 4 or 5.</option>
                        <option value="chronic-liver-disease">Chronic liver disease, including cirrhosis.</option>
                        <option value="severe-respiratory-conditions">Severe respiratory conditions, such as cystic
                            fibrosis, severe asthma, or chronic obstructive pulmonary disease (COPD).</option>
                        <option value="neurological-conditions">Neurological conditions, including motor neurone
                            disease, multiple sclerosis, or conditions that impair respiratory function.</option>
                        <option value="immunocompromised-status">Immunocompromised status due to medical conditions or
                            treatments, such as cancer therapy, immunosuppressive drugs, or genetic disorders affecting
                            immunity.</option>
                        <option value="sickle-cell-thalassemia">Sickle cell disease or thalassemia.</option>
                        <option value="diabetes-with-complications">Diabetes with complications (such as nephropathy or
                            retinopathy).</option>
                        <option value="morbid-obesity">Morbid obesity (BMI ≥ 40 kg/m²).</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="alcohol">Other Health Considerations</label>
                    <select id="alcohol" required>
                        <option value="pregnancy-high-risk-covid">Pregnancy with additional high-risk factors for severe
                            COVID-19.</option>
                        <option value="hiv-aids-low-cd4">HIV/AIDS with a CD4 count < 350 cells/μL or an unsuppressed
                                viral load.</option>
                        <option value="dialysis-or-stem-cell-transplant">Individuals undergoing dialysis or recently
                            received a stem cell transplant.</option>
                    </select>
                </div>


                <label>Preferred Contact Method</label>
                <div class="formFlex">
                    <div class="form-group">
                        <div class="formFlex">
                            <input type="radio" id="patientR" required>
                            <label for="patientR">Phone</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="formFlex">
                            <input type="radio" id="patientR" required>
                            <label for="patientR">Email</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label>Additional Comments or Specific Requests</label>
                    <textarea id="otherSymptoms" rows="3"
                        placeholder="Please specify any other details relevant to your eligibility or test needs"></textarea>
                </div>


            </div>



            <div class="buttons">
                <button type="button" class="btn-prev" id="prevBtn" style="display: none;">Previous</button>
                <button type="button" class="btn-next" id="nextBtn">Next</button>
                <button type="submit" class="btn-submit" id="submitBtn" style="display: none;">Submit</button>
            </div>
        </form>
    </div>

</div>

<?php
    return ob_get_clean();
}