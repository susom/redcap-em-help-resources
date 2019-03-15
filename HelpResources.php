<?php
namespace Stanford\HelpResources;


class HelpResources extends \ExternalModules\AbstractExternalModule {
	  function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}
    function redcap_every_page_top($project_id)
    {
        if (isset($_GET['action']) == 'training') {

           $resources_page= $this->getUrl("index.html");

            ?>


            <script>


                $(document).ready(function() {

                    var resources_pag="<?php echo  $resources_page; ?>";

                    // $('ul.nav a.active').append('<b class="caret"></b>');
                   $('#pagecontent').prepend("<div id='em-info' ></div>");

                     $('#em-info').load(resources_pag);


                });            </script>




            <?php

        }






    }





}