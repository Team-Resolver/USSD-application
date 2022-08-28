<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];

$ussd_string_exploded = explode("*", $text);
$level = count($ussd_string_exploded);

if ( $text == "" ) {
// first response when a user dials our ussd code
$response  = " CON Thankyou for contacting  Emeds,Your healthcare is our concern Kindly choose the language of you choice? \n";
$response .= "1.Continue in  English  \n";
$response .= "2. Aqhubeke Zule \n";
}

else if ($text == "1") {
$response  = " CON Kindly choose the service that you want to access\n";
$response .= "1. Medicine Transportation Services \n";
$response .= "2.  Ambulance Services \n";
$response .= "3. Registration Services\n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = " CON Welcome to our Medicine Transportation Services kindly enter your Full Names\n";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 3) {
    $response = "CON Please enter your full address";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 4) {
    $response = "CON Please enter your Id number";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 5) {
    $response = "CON Please enter your age";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 6) {
    $response = "CON Please enter the drug you want to be supplied with";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 7) {
    // save data in the database
    $response = "END Your data has been captured successfully! Thank you for contacting us. You will be attended to immediately";
}

else if ($text == "1*2") {
$response = " CON Welcome to our Ambulance Services kindly enter the precise location where the ambulance is needed\n";
// $response .= "Would you like to add anything else?Please Enter 1 to confirm \n";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 3) {
    $response = "CON Please enter what has happenned to the victim";
}


elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 4) {
    // save data in the database
    $response = "END Your response has been successfully submitted!, An ambulance has been dispatched to your locality!";
}

else if ($text == "1*3") {
$response = "CON You are about to register for our customer services\n";
$response .= "Kindly enter your Full Names\n";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 3) {
    $response = "CON Please enter your full address";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 4) {
    $response = "CON Please enter your Id number";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 5) {
    $response = "CON Please enter your age";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 6) {
    $response = "CON Please enter the name of the drug prescribed by the doctor";
}

elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 7) {
    // save data in the database
    $response = "END Your data has been captured successfully! We will contact you with further details on the next step";
}

else if ($text == "2") {
    $response  = "CON Sicela ukhethe isevisi ofuna ukuyifinyelela \n";
    $response .= "1.Izinsiza Zokuthutha Ngemithi\n";
    $response .= "2.  Izinkonzo zama-ambulensi \n";
    $response .= "3. Amasevisi Okubhalisa\n";
    
    }
else if ($text == "2*1 ") {
        $response  = "CON Siyakwamukela Ezinsizeni Zokuthutha Zemithi sicela ufake amagama akho aphelele\n";
        
        }
//echo response
header('Content-type: text/plain');
echo $response
?>