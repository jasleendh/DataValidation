//This is javascript to do client side validation in html
//Author Jasleen Dhillon

//First name validation
function validateForm(event) {
    //variable to get first name id from html form
    var firstName = document.getElementById("firstName").value;
    if (firstName == "") {
        alert("First name cannot be empty. Please enter first name.");
    }
    else if (firstName.length < 0 || firstName.length > 50) {
        alert("The maximum length of first name cannot exceed 50.");
    }

    //Last name Validation
    //variable to get last name id from html form
    var lastName = document.getElementById("lastName").value;
    if (lastName == "") {
        alert("Last name cannot be empty. Please enter last name.");
    }
    else if (lastName.length < 0 || lastName.length > 50) {
        alert("The maximum length of last name cannot exceed 50.");
    }

    //Email address Validation
    //variable to get email address id from html form
    var email = document.getElementById("email").value;
    if (email == "") {
        alert("Email cannot be empty. Please enter email address.");
    }
    else if (email.length < 0 || email.length > 50) {
        alert("The maximum length of first name cannot exceed 50.");
    }

    // Date of Birth field validation
    //variable to get date of birth id from html form
    var date = document.getElementById("date").value;
    if (date == "") {
        alert("Date of birth field cannot be empty. Please enter date of birth.");
    }

    //Type of terrain validation
    //variable to get terrain radio buttons class from html form
    var terrain = document.getElementsByClassName("terrain");
    var check = false;
    for (i = 0; i < terrain.length; i++) {
        if (terrain[i].checked) {
            check = true;
        }
        else {
            check = false;
        }
    }
    if (check == false) {
        alert("Please select one of the options of terrain.");
    }

    //Rating of current shoes validation
    //variable to get rating of current shoes id from html form
    var shoes = document.getElementById("shoes").value;
    if (shoes == "") {
        alert("Shoes rating cannot be empty. Please rate on the scale of 1 - 10.");
    }
    else if (shoes < 0 || shoes > 10) {
        alert("Please rate shoes on the scale of 1 - 10.");
    }

    //Street address validation
    //variable to get street address id from html form
    var street = document.getElementById("street").value;
    if (street == "") {
        alert("Street address cannot be empty. Please enter street address.");
    }
    else if (street.length < 0 || street.length > 100) {
        alert("The maximum length of street address cannot exceed 50.");
    }

    //City input field validation
    //variable to get city name id from html form
    var city = document.getElementById("city").value;
    if (city == "") {
        alert("City name cannot be empty. Please enter city name.");
    }
    else if (city.length < 0 || city.length > 20) {
        alert("The maximum length of city name cannot exceed 20.");
    }

    //Province select input validation
    //variable to get province id from html form
    var province = document.getElementsByClassName("selectProvince").value;
    if (province == "") {
        alert("Provice cannot be empty. Please elect one of the options of province.");
    }


    //Postal code validation
    //variable to get postal code id from html form
    var postalCode = document.getElementById("postalCode").value;
    if (postalCode == "") {
        alert("Postal code cannot be empty. Please enter postal code.");
    }
    else if (postalCode.length < 0 || postalCode.length > 7) {
        alert("The maximum length of postal code cannot exceed 6.");
    }

    //Shipping method validation
    //variable to get shipping method id from html form
    var shipping = document.getElementsByClassName("shipping");
    var checkProvince = false;
    for (i = 0; i < terrain.length; i++) {
        if (terrain[i].checked) {
            checkProvince = true;
        }
        else {
            checkProvince = false;
        }
    }
    if (checkProvince == false) {
        alert("Shipping method cannot be empty. Please select of the options for shipping method.");
    }

}

var submit = document.getElementById("submit");

submit.addEventListener("click", validateForm);
