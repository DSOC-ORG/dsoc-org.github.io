<?php

if (isset($_POST['contact_text']) && isset($_SERVER['DSOC_CONTACT'])) {
    mail($_SERVER['DSOC_MAIL'], "Inquiry", strip_tags($_POST['contact_text']));
}

header("Location: ../index.html");
