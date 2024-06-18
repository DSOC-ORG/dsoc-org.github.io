<?php

if (isset($_POST['contact_text']) && !empty($_POST['contact_text']) && isset($_SERVER['DSOC_MAIL'])) {
    mail($_SERVER['DSOC_MAIL'], "Inquiry", strip_tags($_POST['contact_text']));
}

header("Location: ../index.html#get-in-touch");
