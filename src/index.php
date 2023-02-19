<?php

$page_title = "Coming Soon";
$stylesheet = "/assets/css/comingsoon.css";

$page_content = function()
{
?>

<div class="comingsoon">
    <div class="title">Privacy Buff</div>
    <div class="tagline">A guide to your privacy, by buffs who care.</div>
    <div class="bubble">Coming Soon</div>
    <div class="footnote">Site by <a href="https://davidhunter.scot" target="_blank">David Hunter</a>. Source code on <a href="https://github.com/DavidHunterScot/PrivacyBuff" target="_blank">GitHub</a>.</div>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
