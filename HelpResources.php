<?php
namespace Stanford\HelpResources;


class HelpResources extends \ExternalModules\AbstractExternalModule {
	  function __construct() {
		parent::__construct();
         // System::init();
         //$lang['home_62']="testtttt";
		// Other code to run when object is instantiated
	}
    function redcap_every_page_top($project_id)
    {
        if (isset($_GET['action']) && $_GET['action'] == 'training') {
           $resources_page= $this->getUrl("index.html");
            ?>
            <script>
                $(document).ready(function() {
                    var resources_pag="<?php echo  $resources_page; ?>";
                    $('#nav-tab-training a').html("<i class='fas fa-map-signs'></i> Resources & Training"); //redcap variable  $lang['home_62']
                    $('#pagecontent').prepend("<div id='em-info' ></div>");
                    $('#em-info').load(resources_pag);
                });
            </script>
            <?php
        }
    }

}