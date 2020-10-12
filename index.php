<!-- php file for server side validation
Author Jasleen Dhillon -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <title>Server Side Validation</title>
</head>

<body>
    <?php
    //validation for first name
    if (isset($_POST["ftName"])) {
        $firstName = format($_POST["ftName"]);

        if (empty($firstName)) {
            echo "<p class='error'>First name cannot be empty.Please <a href='index.html'>Try again</a></p>";
        } else if (!preg_match("/^([a-zA-Z' ]+)$/", $firstName)) {
            echo "<p class='error'>First name $firstName has invalid character. It should only contain letters. Please <a href='index.html'>Try again</a></p>";
        } else if (strlen($firstName) > 50) {
            echo "<p class='error'>The length of first name cannot be more than 50. Please <a href='index.html'>Try again</a></p>";
        } else {
            echo "<p class='valid'>First name provided is valid: $firstName</p>";
        }
    }

    //validation for last name
    if (isset($_POST["ltName"])) {
        $lastName = format($_POST["ltName"]);

        if (empty($lastName)) {
            echo "<p class='error'>Last name cannot be empty.Please <a href='index.html'>Try again</a></p>";
        } else if (!preg_match("/^([a-zA-Z' ]+)$/", $lastName)) {
            echo "<p class='error'>Last name $lastName has invalid character. Please <a href='index.html'>Try again</a></p>";
        } else if (strlen($lastName) > 50) {
            echo "<p class='error'>The length of last name cannot be more than 50. Please <a href='index.html'>Try again</a><p>";
        } else {
            echo "<p class='valid'>Last name provided is valid: $lastName</p>";
        }
    }

    //validation for email address
    if (isset($_POST["emailAddress"])) {
        $emailAddress = format($_POST["emailAddress"]);

        if (empty($emailAddress)) {
            echo "<p class='error'>Email address cannot be empty.Please <a href='index.html'>Try again</a></p>";
        } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailAddress)) {
            echo "<p class='error'>Email address $emailAddress is not valid. Please <a href='index.html'>Try again</a></p>";
        } else if (strlen($emailAddress) > 50) {
            echo "<p class='error'>The length of email address cannot be more than 50. Please <a href='index.html'>Try again</a><p>";
        } else {
            echo "<p class='valid'>Email address provided is valid: $emailAddress</p>";
        }
    }

    //Show date selected
    if (isset($_POST["dateOfBirth"])) {
        $date = $_POST["dateOfBirth"];
        echo "<p class='valid'>Date of Birth provided is: $date</p>";
    } else {
        echo "<p>Please enter a valid date of birth.Please <a href='index.html'>Try again</a></p>";
    }

    //Validation for runner checkbox
    if (isset($_POST["ckBox"])) {
        $runner = $_POST["ckBox"];
        if ($runner == "yes" && $runner == "no") {
            echo "<p class='error'>You can only select one.</p>";
        } else {
            echo "<p class='valid'>The input of runner checkbox is valid: $runner</p>";
        }
    } else {
        echo "<p class='error'>The checkbox field cannot be empty. Please <a href='index.html'>Try again</a></p>";
    }

    //validation for terrain
    if (isset($_POST["terrain"])) {
        $terrain = $_POST["terrain"];
        echo "<p class='valid'>Terrain selected is: $terrain</p>";
    } else {
        echo "<p class='error'>No option has been selected for terrain. Please <a href='index.html'>Try again</a></p>";
    }

    //validation for rating of current shoes
    if (isset($_POST["currentShoes"])) {
        $shoes = format($_POST["currentShoes"]);

        if (empty($shoes)) {
            echo "<p class='error'>Rating current shoes input connot be empty.Please <a href='index.html'>Try again</a></p>";
        } else if (is_numeric($shoes) == false) {
            echo "<p class='error'>Rating for current shoes can only be a number.Please <a href='index.html'>Try again</a></p>";
        } else if ($shoes < 0 || $shoes > 10) {
            echo "<p class='error'>Rating of current shoes is not between the scale of 1 - 10.Please <a href='index.html'>Try again</a></p.";
        } else {
            echo "<p class='valid'>Rating for shoes is valid: $shoes</p>";
        }
    }

    //validation for street address
    if (isset($_POST["streetInput"])) {
        $street = format($_POST["streetInput"]);

        if (empty($street)) {
            echo "<p class='error'>Street address cannot be empty. Please <a href='index.html'>Try again</a></p>";
        } else if (!preg_match("/^([0-9a-zA-Z' ]+)$/", $street)) {
            echo "<p class='error'>Street address $street is not valid. Please <a href='index.html'>Try again</a></p>";
        } else if (strlen($street) > 100) {
            echo "<p class='error'>The length of street address cannot be more than 100. Please <a href='index.html'>Try again</a><p>";
        } else {
            echo "<p class='valid'>Street address provided is valid: $street</p>";
        }
    }

    //validation for city input
    if (isset($_POST["cityInput"])) {
        $city = format($_POST["cityInput"]);

        if (empty($city)) {
            echo "<p class='error'>City name cannot be empty. Please <a href='index.html'>Try again</p>";
        } else if (!preg_match("/^([a-zA-Z' ]+)$/", $city)) {
            echo "<p class='error'>City $city is not valid. Please <a href='index.html'>Try again</p>";
        } else if (strlen($city) > 20) {
            echo "<p class='error'>The length of city name cannot be more than 20. Please <a href='index.html'>Try again</a><p>";
        } else {
            echo "<p class='valid'>City provided is valid: $city</p>";
        }
    }

    //validation for postal code
    if (isset($_POST["postal"])) {
        $postalCode = format($_POST["postal"]);

        if (empty($postalCode)) {
            echo "<p class='error'>Postal code cannot be empty. Please <a href='index.html'>Try again</p>";
        } else if (!preg_match("/^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/", $postalCode)) {
            echo "<p class='error'>Postal code $postalCode is not valid. Please <a href='index.html'>Try again</a></p>";
        } else if (strlen($postalCode) > 7) {
            echo "<p class='error'>The length of postal code cannot be more than 7. Please <a href='index.html'>Try again</a><p>";
        } else {
            echo "<p class='valid'>Postal code provided is valid: $postalCode</p>";
        }
    }

    //validation for province selected
    if (isset($_POST["province"])) {
        $province = format($_POST["province"]);

        if (empty($province)) {
            echo "<p class='error'>Province cannot be empty. Please <a href='index.html'>Try again</p>";
        } else {
            echo "<p class='valid'>Province provided is valid: $province</p>";
        }
    }

    //validation for shipping method
    if (isset($_POST["shipping"])) {
        $shippingMethod = $_POST["shipping"];
        echo "<p class='valid'>Shipping method selected is: $shippingMethod</p>";
    } else {
        echo "<p class='error'>No option has been selected for shipping method. Please <a href='index.html'>Try again</a></p>";
    }

    //funtion that filter/format the string from data provided
    function format($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>

</html>