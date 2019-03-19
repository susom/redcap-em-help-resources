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
        // Only updates on index page
        $this->emDebug(PAGE);
        if (substr(PAGE,0,9) == "index.php" || PAGE == "ControlCenter/index.php" || PAGE=="" ) {
            $this->updateNavHeader();
        }


        // If we are on our custom help_resources, take over page
        if (PAGE == "index.php?action=help_resources") {
            $this->emDebug("ON HELP_RESOURCES");
            include $this->getModulePath() . "/help_resources.php";
        }
    }


    function updateNavHeader() {
        // Hide the normal help*faq and trainingvideos nav links
        $this->emDebug("Hiding Nav Bar Items!");
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
                        .attr("href","?action=help_resources")
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