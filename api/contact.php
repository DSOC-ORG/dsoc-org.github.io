<?php

if (isset($_POST['contact_text']) && isset($_ENV['DSOC_CONTACT'])) {
    mail($_ENV['DSOC_MAIL'], "Inquiry", strip_tags($_POST['contact_text']));
}

header("Location: ../index.html");
