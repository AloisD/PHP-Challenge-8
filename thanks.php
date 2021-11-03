<?php
/*
const BR = '<br> <br> <br>';

var_dump($_POST);

echo BR;
*/
echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de “". $_POST['user_message_subject'] ."”. Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_tel'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];