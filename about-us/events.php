<?php
    $page_tags = '<title>Upcoming events at Dhyan Foundation</title>';
    $current_section = 'about-us';
    require_once(__DIR__ . '/../includes/header.php'); 
?>

<script>
$(document).ready(function(){
    //at the start, show only classes
    $("#df-events").find('tr:gt(0)').hide();
    $(".df-class").show();

    $("#event-type").change(function(){
        $("#df-events").find('tr:gt(0)').hide();        
        $(".df-" + $(this).val()).fadeIn();
    });
});
</script>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Upcoming Events at Dhyan Foundation</h2>
                    <br>
                </div>
            </div>            
        </div>

        <div class="row">
            <div class="col-sm-8">
                <p>Select type of event 
                    <select id="event-type">
                        <option value="class">Class</option>
                        <option value="havan">Havan</option>
                        <option value="langar">Langar</option>
                    </select>
                </p>

                <br>
                <table id="df-events" class="table table-striped table-responsive" style="border: 1px solid #BBB;">
                    <tr>
                        <th>Date</th>
                        <th>City</th>
                        <th>Details</th>
                        <th>Contact</th>
                    </tr>
                    <tr class="df-class">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Class text here. Class text here. Class text here. Class text here. Class text here. Class text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-havan">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Havan text here. Havan text here. Havan text here. Havan text here. Havan text here. Havan text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-langar">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Langar text here. Langar text here. Langar text here. Langar text here. Langar text here. Langar text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-class">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Class text here. Class text here. Class text here. Class text here. Class text here. Class text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-havan">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Havan text here. Havan text here. Havan text here. Havan text here. Havan text here. Havan text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-langar">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Langar text here. Langar text here. Langar text here. Langar text here. Langar text here. Langar text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-class">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Class text here. Class text here. Class text here. Class text here. Class text here. Class text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-havan">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Havan text here. Havan text here. Havan text here. Havan text here. Havan text here. Havan text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>
                    <tr class="df-langar">
                        <td>22 July 2017</td>
                        <td>Delhi, India</td>
                        <td>Langar text here. Langar text here. Langar text here. Langar text here. Langar text here. Langar text here.</td>
                        <td>+919999999999 / +919999999999</td>
                    </tr>                        
                </table>
            </div>
            
            <div class="col-sm-4">
                <table class="table table-striped table-bordered" style="margin-top:65px;">
                    <tr>
                        <th colspan="2">Important Dates</th>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                    <tr>
                        <td>21 August 2017</td>
                        <td>Dakshinayan Aarambh</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <?php 
                //sidebar name is linked to section name - no effect if file doesn't exist
                include_once(__DIR__ . '/../includes/sidebars/' . $current_section . '.php'); 
            ?>
        </div>
    </div>
</section>
  
<?php require_once('../includes/footer.php'); ?>