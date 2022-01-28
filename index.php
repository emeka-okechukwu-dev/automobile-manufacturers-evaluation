<!DOCTYPE html>
<html>

<head>

    <title>Automobile Manufacturers Evaluation</title>

<script>

    // Function to get the models of a particular automobile maker
    function get_maker_model() {

        var automobile_maker = document.getElementById("automobile_maker").value;

        var models = [];

        // Nested if loop to check the selected automobile maker and get the models under that maker
        if (automobile_maker === "BMW") {

            models = ["1 Series", "2 Series", "3 Series", "4 Series", "5 Series"];
        }
        else if (automobile_maker === "Ford") {

            models = ["Escape", "Everest", "Fiesta", "Focus", "Mustang"];
        }
        else if (automobile_maker === "Ferrari") {

            models = ["275", "308", "488", "812", "GTC4"];
        }
        else if (automobile_maker === "Hyundai") {

            models = ["Elantra", "i20", "i30", "iLOAD", "iMax"];
        }
        else if (automobile_maker === "Kia") {

            models = ["Carnival", "Cerato", "Niro", "Picanto", "Rio"];
        }
        else if (automobile_maker === "Mazda") {

            models = ["2", "3", "6", "BT-60", "CX-3"];
        }
        else if (automobile_maker === "Mitsubishi") {

            models = ["ASX", "Eclipse Cross", "Express", "Mirage", "Outlander"];
        }
        else if (automobile_maker === "Nissan") {

            models = ["37OZ", "GT-R", "Juke", "Leaf", "Navara"];
        }
        else if (automobile_maker === "Nissan") {

            models = ["86", "bZ4X", "C-HR", "Camry", "Coaster"];
        }
        else if (automobile_maker === "Volkswagen") {

            models = ["Amarok", "Arteon", "Caddy", "California", "Caravelleå"];
        }
      
        var string = "";
      
        // Loop to form a string that contains all the models of the selected automobile maker
        for(i = 0; i < models.length; i++) {

            string = string + "<option value =" + models[i] + ">" + models[i] + "</option>";
        }

        document.getElementById("maker_model").innerHTML = string;
    }
</script>
</head>

<body>

<h2>Automobile Manufacturers Evaluation Form</h2><br>

<form method="POST" action="customer_details.php" onsubmit="return validateTheForm()">

    <label>What is your full name?</label><br>
    <input type="text" name="full_name" id="full_name"/><br><br>

    <label>What is your reference code?</label><br>
    <input type="text" name="reference_code" id="reference_code"/><br><br>

    <label>What is your email?</label><br>
    <input type="text" name="customer_email" id="customer_email"/><br><br>

    <label>Select automobile maker:</label><br>
    <select name="automobile_maker" id="automobile_maker" onchange="get_maker_model()">
        <option>Select Maker</option>
        <option>BMW</option>
        <option>Ferrari</option>
        <option>Ford</option>
        <option>Hyundai</option>
        <option>Kia</option>
        <option>Mazda</option>
        <option>Mitsubishi</option>
        <option>Nissan</option>
        <option>Toyota</option>
        <option>Volkswagen</option>
    </select><br><br>

    <label>Select maker's model:</label><br>
    <select name="maker_model" id="maker_model"></select><br><br>

    <label>Select all the car conditions that apply:</label><br>
    <div>
        <input type="checkbox" name="car_conditions[]" id="engine_issue" value="Engine issue"/>
        <label for="engine_issue">Engine issue</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="gearbox_issue" value="Gearbox issue"/>
        <label for="gearbox_issue">Gearbox issue</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="need_body_repair" value="Need body repair"/>
        <label for="need_body_repair">Need body repair</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="need_painting" value="Need repainting"/>
        <label for="need_painting">Need repainting</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="wiring_problems" value="Wiring problems"/>
        <label for="wiring_problems">Wiring problems</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="oil_leakage" value="Oil leakage"/>
        <label for="oil_leakage">Oil leakage</label>
    </div>
    <div>
        <input type="checkbox" name="car_conditions[]" id="break_issue" value="Brake issue"/>
        <label for="break_issue">Brake issue</label>
    </div>
    <br><br>

    <input type="submit" value="Next"/>
</form>

<script>

    // Function to validate the form when the Next button is clicked
    function validateTheForm() {

        // Validate customer's email using regular expression
        var emailValidation = /\S+@\S+\.\S+/.test(document.getElementById('customer_email').value);

        // Validate customer's reference code using regular expression
        var customerReferenceCodeValidation = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W).{6,}$/.test(document.getElementById('reference_code').value)

        if (document.getElementById('full_name').value.length == 0 || document.getElementById('reference_code').value.length == 0 || document.getElementById('customer_email').value.length == 0
        || document.getElementById('automobile_maker').value.length == 0 || document.getElementById('maker_model').value.length == 0 || document.getElementById('engine_issue').value.length == 0) {
           
            // Prevent form submission and alert error if there is an empty field
            alert("A field is left empty");
            return false;
        }
        else if (customerReferenceCodeValidation == false) {
            
            // Prevent form submission and alert error if reference code criteria is not met
            alert('Please use correct reference code format (minimum of 6 characters, at least one uppercase and lowercase character, numbers, and special character)');
            return false;
        }
        else if (emailValidation == false) {

            // Prevent form submission and alert error if customer's email is not a valid email
            alert("Please use correct email format");
            return false;
        }
        else if (!document.getElementById('engine_issue').checked && !document.getElementById('gearbox_issue').checked && !document.getElementById('need_body_repair').checked && !document.getElementById('need_painting').checked 
        && !document.getElementById('wiring_problems').checked && !document.getElementById('oil_leakage').checked && !document.getElementById('break_issue').checked) {

            // Prevent form submission and alert error if at least one checkbox is not clicked
            alert("Please select at least one condition");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
