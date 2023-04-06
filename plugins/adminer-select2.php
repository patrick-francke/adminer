<?php


// This plugin enables selcet2 dropdown fields for adminer 
class AdminerSelect2
{
    function head() {
    ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
jQuery(document).ready(function($) {
    initSelect2();
    jQuery('legend a').on('click', function(e) {
        initSelect2();
    });
});
function initSelect2() { jQuery('select').select2(); }
</script>


<?php
//this adds the external resources to the allow list such that it is allowed to load jquery and select2
    $csp_sources = "'self' https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js";
    header("Content-Security-Policy: script-src $csp_sources 'unsafe-inline' 'unsafe-eval'; style-src $csp_sources 'unsafe-inline'");

    }
}