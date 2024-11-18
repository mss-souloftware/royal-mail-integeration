<?php
/**
 * 
 * @package RoyalMail Integeration
 * @subpackage M. Sufyan Shaikh
 * 
*/

function ticketing_frontend()
{
    ob_start(); ?>

<div class="formWrapper">
    <div class="container">
        <h1>Cardiology Intake Form</h1>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <form id="cardiologyForm">
            <!-- Personal Information -->
            <div class="form-section active" data-section="1">
                <h2 class="section-title">Personal Information</h2>
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
            </div>

            <!-- Insurance Details -->
            <div class="form-section" data-section="2">
                <h2 class="section-title">Insurance Details</h2>
                <div class="form-group">
                    <label for="provider">Insurance Provider</label>
                    <input type="text" id="provider" required>
                </div>
                <div class="form-group">
                    <label for="policyNumber">Policy Number</label>
                    <input type="text" id="policyNumber" required>
                </div>
            </div>

            <!-- Medical History -->
            <div class="form-section" data-section="3">
                <h2 class="section-title">Medical History</h2>
                <div class="form-group">
                    <label>Known Medical Conditions</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="hypertension">
                            <label for="hypertension">Hypertension</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="diabetes">
                            <label for="diabetes">Diabetes</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="cholesterol">
                            <label for="cholesterol">High Cholesterol</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="familyHistory">Family History of Heart Disease</label>
                    <select id="familyHistory" required>
                        <option value="">Select...</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="medications">Current Medications</label>
                    <textarea id="medications" rows="3"></textarea>
                </div>
            </div>

            <!-- Heart-Related Symptoms -->
            <div class="form-section" data-section="4">
                <h2 class="section-title">Heart-Related Symptoms</h2>
                <div class="form-group">
                    <label>Current Symptoms</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="chestPain">
                            <label for="chestPain">Chest Pain</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="shortnessBreath">
                            <label for="shortnessBreath">Shortness of Breath</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="irregularHeartbeat">
                            <label for="irregularHeartbeat">Irregular Heartbeat</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="otherSymptoms">Other Symptoms</label>
                    <textarea id="otherSymptoms" rows="3"></textarea>
                </div>
            </div>

            <!-- Lifestyle Factors -->
            <div class="form-section" data-section="5">
                <h2 class="section-title">Lifestyle Factors</h2>
                <div class="form-group">
                    <label for="smokingStatus">Smoking Status</label>
                    <select id="smokingStatus" required>
                        <option value="">Select...</option>
                        <option value="current">Current Smoker</option>
                        <option value="former">Former Smoker</option>
                        <option value="never">Never Smoked</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alcohol">Alcohol Consumption</label>
                    <select id="alcohol" required>
                        <option value="">Select...</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>

            <!-- Previous Cardiac Tests -->
            <div class="form-section" data-section="6">
                <h2 class="section-title">Previous Cardiac Tests or Procedures</h2>
                <div class="form-group">
                    <label>Previous Tests</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="ekg">
                            <label for="ekg">EKG</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="stressTest">
                            <label for="stressTest">Stress Test</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="echocardiogram">
                            <label for="echocardiogram">Echocardiogram</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="surgeries">Previous Surgeries or Interventions</label>
                    <select id="surgeries" required>
                        <option value="">Select...</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
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