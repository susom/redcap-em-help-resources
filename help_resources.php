<?php

// Help and Resources Page

// Initialize page display object
// $objHtmlPage = new HtmlPage();
// $objHtmlPage->addExternalJS(APP_PATH_JS . "base.js");
// $objHtmlPage->addStylesheet("jquery-ui.min.css", 'screen,print');
// $objHtmlPage->addStylesheet("style.css", 'screen,print');
// $objHtmlPage->addStylesheet("home.css", 'screen,print');
// $objHtmlPage->PrintHeader();
// Display tabs (except if viewing FAQ in a new window)
// $onHelpPageInNewWindow = (isset($_GET['action']) && $_GET['action'] == 'help' && isset($_GET['newwin']));
// if (!$onHelpPageInNewWindow) {
// include APP_PATH_VIEWS . 'HomeTabs.php';
// }

// $this->emLog(headers_sent());
// exit();

?>
<style >
    #pagecontent {display:none}

    .re-card:hover  {
        z-index: 1;
        border: 1px solid #007bff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }
    .re-card{
        border: 1px solid  #6c757d;
    }
    .re-card .list-unstyled li {
        padding: .5rem 0;
        color: #6c757d;
    }
    .rc-button  {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        text-align: -webkit-center;
        /* vertical-align: bottom; */
    }

</style>

<div id="newPageContent" style="display:none;">

    <div style="padding-top:8px;font-size: 18px;border-bottom:1px solid #aaa;padding-bottom:2px;">
        <span class="fas fa-map-signs" aria-hidden="true"></span>
        Training and Resources</div>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card popular">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Wiki</span>
                    <div class="card-body">
                        <p class="card-text">You will find here Tutorials, Videos, answers to the most common questions and also instructions to use a list of custom Add-ins built at Stanford you can use in your project.  </p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://medwiki.stanford.edu/display/redcap" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">The Application FAQ</span>
                    <div class="card-body">

                        <p class="card-text"> Supplied by the developers of REDCap, it contains detailed information on many of REDCap's features.</p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://redcap.stanford.edu/index.php?action=help" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Email Support</span>
                    <div class="card-body">

                        <p class="card-text">We are happy to answer specific questions by emailing redcap-help@lists.stanford.edu. or by filling a consultation request.</p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://redcap.stanford.edu/plugins/gethelp/" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <!--Here is the second row-->
        <div class="row">
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Office Hours</span>
                    <div class="card-body">

                        <p class="card-text"> If you have a question or require some hands-on help with REDCap, we will do our best to assist. In-person or On-line.</p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://medwiki.stanford.edu/x/vIjZB" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">In-Person Training</span>
                    <div class="card-body">

                        <p class="card-text">We offer a free 3-hour Introductory REDCap class once a month. please find here the current calendar. </p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://medwiki.stanford.edu/x/75U0Bw" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="card re-card">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Professional Services</span>
                    <div class="card-body">
                        <p class="card-text">Services beyond the basics, a trained REDCap software engineer can assist in the many aspects of data collection and research.</p>
                        <br><br>
                        <div class="rc-button">
                            <a href="https://medwiki.stanford.edu/x/qafZB" target="_BLANK" class=""><button type="button" class="btn btn-success mb-3 pl-5 pr-5">Go</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready( function() {
        $('#pagecontent .row:first')
            .empty()
            .append( $('#newPageContent').html() )
            .parent()
            .fadeIn(200);

    });
</script>