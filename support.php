<?php
require_once('config.php');


$page_title = 'Support';
$page_description = 'How to get help with "' . NAME . '"';
$page_id = 'support'; // To select the "active" link in the top navigation menu
$page_subid = ''; // not currently used, but may be handy if you decide to add dropdown menus or something

require_once('header.php');
?>

    <div class="tb-row">
        <div class="tb-span2 tb-nav" id="sidebar_holder">
            <ul id="sidebar" class="tb-well tb-nav tb-nav-list tb-span2">
                <li class="tb-active"><a href="#section1"><i class="tb-icon-chevron-right"></i> Section 1</a></li>
                <li><a href="#section2"><i class="tb-icon-chevron-right"></i> Section 2</a></li>
                <li><a href="#section3"><i class="tb-icon-chevron-right"></i> Section 3</a></li>
            </ul>
        </div>
        <!-- end sidebar -->


        <div class="tb-span10">
            <div id="content">

                
                <section class="section" id="section1">
                    <div class="tb-page-header"><h2>Section 1</h2></div>
                    <div class="example">
                        <label>Example</label>
                        <div class="example-content">
                            <p>This is an "Example" block</p>
                        </div>
                    </div>

                    <hr />

                    <div class="example with-code">
                        <label>Example</label>
                        <div class="example-content">
                            <p>This is an "Example" block that has some code attached to it</p>
                        </div>
                    </div>
                    <pre class="prettyprint linenums lang-php">
&lt;php= 'This is an example that has some PHP code'; ?>
</pre>                        
                </section>


                <section class="section" id="section2">
                    <div class="tb-page-header"><h2>Section 2</h2></div>
                </section>

                <section class="section" id="section3">
                    <div class="tb-page-header"><h2>Section 3</h2></div>
                </section>
                

            </div>
            <!-- end content -->


        </div>
        <!--end span-->

      </div>
      <!-- end row-->


<?php require_once('footer.php'); ?>