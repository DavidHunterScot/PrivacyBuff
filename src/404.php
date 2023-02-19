<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$stylesheet = "/assets/css/comingsoon.css";

$page_content = function()
{
?>

<div class="standalone">
    <h1>Not Found (404)</h1>
    <p>Oops, looks like nothing is there. Not to worry, have a look around the site to see if you can find what you are looking for. The <a href="/">home</a> page is a good place to start.</p>
    <p>If you clicked on a link, perhaps that link is now outdated. Please attempt to notify the author of the link so it can be fixed.</p>
    <p><a href="/">Go to the Home Page</a></p>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
