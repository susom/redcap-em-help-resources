<?php
namespace Stanford\HelpResources;

include_once "emLoggerTrait.php";

use \Plugin;

class HelpResources extends \ExternalModules\AbstractExternalModule {

    use emLoggerTrait;

    function __construct() {
		parent::__construct();
	}



	function redcap_every_page_top($project_id)
    {
        // $this->emDebug("On " . __FUNCTION__ . " / " . PAGE);

        // Only updates on index page
        if (substr(PAGE,0,10) == "/index.php" ||    // Looks like PAGE now reports a preceeding / for index... (8.11.7)
            substr(PAGE,0,9) == "index.php" ||
            PAGE == "ControlCenter/index.php" ||
            PAGE=="" ||
            PAGE=="SendItController:upload")
        {
            $this->updateNavHeader();
        }


        // If we are on our custom help_resources, take over page
        if (PAGE == "index.php?action=help_resources" || PAGE == "/index.php?action=help_resources")
        {
            $this->emDebug("ON HELP_RESOURCES");
            include $this->getModulePath() . "/help_resources.php";
        }
    }


    function updateNavHeader() {
        // Hide the normal help*faq and trainingvideos nav links
        $this->emDebug("Hiding Nav Bar Items on " . PAGE);
        ?>
            <style type="text/css">
                #pagecontent > nav.navbar { opacity:0; }
                #nav-tab-help, #nav-tab-training, #nav-tab-training2 { display:none !important; width:0 !important; }
            </style>
        <?php

        // Add our new button
        ?>
            <script>
                $(document).ready(function() {
                    var e = $('#nav-tab-help')
                        .clone()
                        .attr('id','nav-tab-help-resources');

                    e.find('a')
                        .empty()
                        .css({"color": "#800000"})
                        .attr("href","index.php?action=help_resources")
                        .append("<i class='fas fa-spin fa-map-signs'></i>")
                        .append("<span class='font-weight-bold'> Resources & Training</span>");

                    e.insertBefore('#nav-tab-help');

                    // Make our button spin for 2 seconds
                    $('#pagecontent>nav.navbar').animate({"opacity":"1"}, 500, function() {
                        setTimeout(function() {
                            $('i.fa-spin.fa-map-signs').removeClass('fa-spin');
                        }, 1500);
                    }); //.fadeIn(100); // { display:none; }

                });
            </script>
        <?php
    }
}

//test