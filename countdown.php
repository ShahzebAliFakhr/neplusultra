<!-- divider start -->
    <div class="inner-divider"></div>
<!-- divider end -->
<!-- facts start -->
    <section class="section-parallax" id="facts">
        <!-- container start -->
        <div class="container-fluid sections">
            <!-- row start -->
            <div class="row">
                <!-- parallax wrapper start -->
                <div class="parallax parallax-facts" data-parallax-speed="0.75">
                    <!-- parallax overlay start -->
                    <div class="parallax-overlay"></div>
                    <!-- parallax overlay end -->
                    <!-- parallax content start -->
                    <div class="parallax-content">
                        <!-- page title start -->
                        <h2 class="section-heading light">
                            COUNTDOWN
                        </h2>
                        <!-- page title end -->
                        <!-- divider start -->
                        <div class="inner-divider-ultra-half"></div>
                        <!-- divider end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- facts counter start -->
                        <div class="facts-counter-wrapper">
                            <!-- col start -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- fact 1 start -->
                                <div class="facts-counter-number" id="days"></div>
                                <div class="facts-counter-description" style="margin-top: 10px;">
                                    <span class="facts-counter-title">DAYS</span>
                                </div>
                                <!-- fact 1 end -->
                                <!-- divider start -->
                                <div class="inner-divider-mobile"></div>
                                <!-- divider end -->
                            </div>
                            <!-- col end -->
                            <!-- col start -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- fact 2 start -->
                                <div class="facts-counter-number" id="hours"></div>
                                <div class="facts-counter-description" style="margin-top: 10px;">
                                    <span class="facts-counter-title">HOURS</span>
                                </div>
                                <!-- fact 2 end -->
                                <!-- divider start -->
                                <div class="inner-divider-mobile"></div>
                                <!-- divider end -->
                            </div>
                            <!-- col end -->
                            <!-- clearfix start -->
                            <div class="clearfix visible-xs-block"></div>
                            <!-- clearfix end -->
                            <!-- col start -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- fact 3 start -->
                                <div class="facts-counter-number" id="minutes"></div>
                                <div class="facts-counter-description" style="margin-top: 10px;">
                                    <span class="facts-counter-title">MINUTES</span>
                                </div>
                                <!-- fact 3 end -->
                            </div>
                            <!-- col end -->
                            <!-- col start -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- fact 4 start -->
                                <div class="facts-counter-number" id="seconds"></div>
                                <div class="facts-counter-description" style="margin-top: 10px;">
                                    <span class="facts-counter-title">SECONDS</span>
                                </div>
                                <!-- fact 4 end -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- facts counter end -->
                    </div>
                    <!-- parallax content end -->
                </div>
                <!-- parallax wrapper end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- facts end -->
    
    <script>
        //Count Down
// Set the date we're counting down to
var countDownDate = new Date("February 23, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown"

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);
    </script>
