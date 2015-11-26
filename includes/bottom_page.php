<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contact-script.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/html5gallery.js"></script>

    <script>
    /* Home Page Slider
   ========================================================================== */
    $(document).ready(function() {


    var sync1 = $("#mainslider");
    var sync2 = $("#mainslider-nav");

    sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    paginationSpeed: 800,
    navigation: false,
    pagination:false,
    autoPlay:7500,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    });

    sync2.owlCarousel({
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,4],
    itemsTablet : [768,4],
    itemsMobile : [479,2],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
    el.find(".owl-item").eq(0).addClass("synced");
    }
    });

    function syncPosition(el){
    var current = this.currentItem;
    $("#mainslider-nav")
    .find(".owl-item")
    .removeClass("synced")
    .eq(current)
    .addClass("synced")
    if($("#mainslider-nav").data("owlCarousel") !== undefined){
    center(current)
    }
    }

    $("#mainslider-nav").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
    });

    function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
    if(num === sync2visible[i]){
    var found = true;
    }
    }

    if(found===false){
    if(num>sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", num - sync2visible.length+2)
    }else{
    if(num - 1 === -1){
    num = 0;
    }
    sync2.trigger("owl.goTo", num);
    }
    } else if(num === sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
    sync2.trigger("owl.goTo", num-1)
    }
    }

    });

/* Τestimonials
   ========================================================================== */
 $(document).ready(function() {
        $("#testimonials-carousel").owlCarousel({
            items: 1,
            autoPlay: 5000,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1]
        });
    });

    // ______________ STATS
jQuery(document).ready(function() {
$('.statistics').waypoint(function() {

 $('#myStat1').circliful();
 $('#myStat2').circliful();
 $('#myStat3').circliful();
 $('#myStat4').circliful();

}, { offset: 800, triggerOnce: true });
});

    </script>
    <!-- mapa contacto -->
  <script>
jQuery(function($) {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
     draggable: false,
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#c6eee7"},{"visibility":"on"}]}]
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);

    // Multiple Markers
    var markers = [
        ['ServerEast - SHARED ON THEMELOCK.COM, Oak Brook, IL, United States', 41.84763,-87.92530],
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h5>ServerEast - SHARED ON THEMELOCK.COM, Oak Brook, IL, United States</h5>' +
        '<p>Global leaders overcome injustice solutions sharing economy Global South. Social analysis forward-thinking vulnerable citizens frontline tackling, tackle gun control women and children Gandhi.</p>' +        '</div>']
    ];

    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(12);
        google.maps.event.removeListener(boundsListener);
    });

    }
</script>  
<!-- cliente -->
<script>
    $(document).ready(function() {

        $("#datacenter-partners").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 6,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            pagination: false

        });

    });
    </script>
  <!-- faq -->  
 <script>
    $(document).ready(function() {
        $("#testimonials-carousel").owlCarousel({
            items: 1,
            autoPlay: 5000,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1]
        });
    });
</script>
 <!-- sistemas informaticos -->  
 <script type="text/javascript">
    // ______________  TOOLTIPS
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // ______________ TABS
    $('#shared-hosting-tabs').responsiveTabs({
        startCollapsed: 'accordion'
    });

    // ______________  PRICE SWITCH

    $(window).load(function() {

        $(".price-per-period .permonth").click(function() {
            $(".monthprice").show();
            $(".yearprice").hide();
            $(".twoyearprice").hide();
            $(".price-per-period .permonth").addClass("btn-shared-checked");
            $(".price-per-period .permonth").removeClass("btn-default");
            $(".price-per-period .peryear").removeClass("btn-shared-checked");
            $(".price-per-period .peryear").addClass("btn-default");
            $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").addClass("btn-default");
        });

        $(".price-per-period .peryear").click(function() {
            $(".monthprice").hide();
            $(".yearprice").show();
            $(".twoyearprice").hide();
            $(".price-per-period .permonth").removeClass("btn-shared-checked");
            $(".price-per-period .permonth").addClass("btn-default");
            $(".price-per-period .peryear").addClass("btn-shared-checked");
            $(".price-per-period .peryear").removeClass("btn-default");
            $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").addClass("btn-default");
        });

        $(".price-per-period .per2yrs").click(function() {
            $(".monthprice").hide();
            $(".yearprice").hide();
            $(".twoyearprice").show();
            $(".price-per-period .permonth").removeClass("btn-shared-checked");
            $(".price-per-period .permonth").addClass("btn-default");
            $(".price-per-period .peryear").addClass("btn-default");
            $(".price-per-period .peryear").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").removeClass("btn-default");
            $(".price-per-period .per2yrs").addClass("btn-shared-checked");
        });

    });
</script>
 <!-- desarrollo web -->  
<script>
    (
        function($, undefined) {
            $.ui.slider.prototype.options =
                $.extend({},
                    $.ui.slider.prototype.options, {
                        paddingMin: 0,
                        paddingMax: 0
                    }
                );

            $.ui.slider.prototype._refreshValue =
                function() {
                    var
                        oRange = this.options.range,
                        o = this.options,
                        self = this,
                        animate = (!this._animateOff) ? o.animate : false,
                        valPercent,
                        _set = {},
                        elementWidth,
                        elementHeight,
                        paddingMinPercent,
                        paddingMaxPercent,
                        paddedBarPercent,
                        lastValPercent,
                        value,
                        valueMin,
                        valueMax;

                    if (self.orientation === "horizontal") {
                        elementWidth = this.element.outerWidth();
                        paddingMinPercent = o.paddingMin * 100 / elementWidth;
                        paddedBarPercent = (elementWidth - (o.paddingMin + o.paddingMax)) * 100 / elementWidth;
                    } else {
                        elementHeight = this.element.outerHeight();
                        paddingMinPercent = o.paddingMin * 100 / elementHeight;
                        paddedBarPercent = (elementHeight - (o.paddingMin + o.paddingMax)) * 100 / elementHeight;
                    }

                    if (this.options.values && this.options.values.length) {
                        this.handles.each(function(i, j) {
                            valPercent =
                                ((self.values(i) - self._valueMin()) / (self._valueMax() - self._valueMin()) * 100) * paddedBarPercent / 100 + paddingMinPercent;
                            _set[self.orientation === "horizontal" ? "left" : "bottom"] = valPercent + "%";
                            $(this).stop(1, 1)[animate ? "animate" : "css"](_set, o.animate);
                            if (self.options.range === true) {
                                if (self.orientation === "horizontal") {
                                    if (i === 0) {
                                        self.range.stop(1, 1)[animate ? "animate" : "css"]({
                                            left: valPercent + "%"
                                        }, o.animate);
                                    }
                                    if (i === 1) {
                                        self.range[animate ? "animate" : "css"]({
                                            width: (valPercent - lastValPercent) + "%"
                                        }, {
                                            queue: false,
                                            duration: o.animate
                                        });
                                    }
                                } else {
                                    if (i === 0) {
                                        self.range.stop(1, 1)[animate ? "animate" : "css"]({
                                            bottom: (valPercent) + "%"
                                        }, o.animate);
                                    }
                                    if (i === 1) {
                                        self.range[animate ? "animate" : "css"]({
                                            height: (valPercent - lastValPercent) + "%"
                                        }, {
                                            queue: false,
                                            duration: o.animate
                                        });
                                    }
                                }
                            }
                            lastValPercent = valPercent;
                        });
                    } else {
                        value = this.value();
                        valueMin = this._valueMin();
                        valueMax = this._valueMax();
                        valPercent =
                            ((valueMax !== valueMin) ? (value - valueMin) / (valueMax - valueMin) * 100 : 0) * paddedBarPercent / 100 + paddingMinPercent;

                        _set[self.orientation === "horizontal" ? "left" : "bottom"] = valPercent + "%";

                        this.handle.stop(1, 1)[animate ? "animate" : "css"](_set, o.animate);

                        if (oRange === "min" && this.orientation === "horizontal") {
                            this.range.stop(1, 1)[animate ? "animate" : "css"]({
                                width: valPercent + "%"
                            }, o.animate);
                        }
                        if (oRange === "max" && this.orientation === "horizontal") {
                            this.range[animate ? "animate" : "css"]({
                                width: (100 - valPercent) + "%"
                            }, {
                                queue: false,
                                duration: o.animate
                            });
                        }
                        if (oRange === "min" && this.orientation === "vertical") {
                            this.range.stop(1, 1)[animate ? "animate" : "css"]({
                                height: valPercent + "%"
                            }, o.animate);
                        }
                        if (oRange === "max" && this.orientation === "vertical") {
                            this.range[animate ? "animate" : "css"]({
                                height: (100 - valPercent) + "%"
                            }, {
                                queue: false,
                                duration: o.animate
                            });
                        }
                    }
                };

            $.ui.slider.prototype._normValueFromMouse =
                function(position) {
                    var
                        o = this.options,
                        pixelTotal,
                        pixelMouse,
                        percentMouse,
                        valueTotal,
                        valueMouse;

                    if (this.orientation === "horizontal") {
                        pixelTotal = this.elementSize.width - (o.paddingMin + o.paddingMax);
                        pixelMouse = position.x - this.elementOffset.left - o.paddingMin - (this._clickOffset ? this._clickOffset.left : 0);
                    } else {
                        pixelTotal = this.elementSize.height - (o.paddingMin + o.paddingMax);
                        pixelMouse = position.y - this.elementOffset.top - o.paddingMin - (this._clickOffset ? this._clickOffset.top : 0);
                    }

                    percentMouse = (pixelMouse / pixelTotal);
                    if (percentMouse > 1) {
                        percentMouse = 1;
                    }
                    if (percentMouse < 0) {
                        percentMouse = 0;
                    }
                    if (this.orientation === "vertical") {
                        percentMouse = 1 - percentMouse;
                    }

                    valueTotal = this._valueMax() - this._valueMin();
                    valueMouse = this._valueMin() + percentMouse * valueTotal;

                    return this._trimAlignValue(valueMouse);
                };
        }
    )(jQuery);

    var memoryval = new Array('1GB', '2GB', '3GB', '4GB'); //Memory array per plan
    var diskspaceval = new Array('100GB', '200GB', '300GB', '400GB'); //Disk Space array per plan
    var bandwidthval = new Array('1000GB', '2000GB', '3000GB', '4000GB'); //Bandwidth array per plan
    var decimalval = new Array('.00', '.00', '.00', '.00'); //Decimal array per plan

    var priceval = new Array('39', '79', '109', '139'); //Price array per plan
    var urlval = new Array('1', '2', '3', '4'); //WHMCS pid array per plan

    var finalurl = 'http://domain.com/cart.php?a=add&pid='; //Update "domain.com" with your WHMCS installation URL

    var starting_point = 2; //Where the slider stops on first page load. Ideal to sign a plan as popular.

    $(document).ready(function() {

        $("#vps-slider").slider({
            range: 'min',
            animate: true,
            min: 1,
            max: 4, //Update this if you less or more plans
            paddingMin: 0,
            paddingMax: 0,
            slide: function(event, ui) {
                $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
                $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
                $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
                $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
                $('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);

                $('.vps-prices-container #decimal').html(decimalval[ui.value - 1]);

            },
            change: function(event, ui) {
                $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
                $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
                $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
                $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
                $('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);
                $('.vps-prices-container #decimal').html(decimalval[ui.value - 1]);
            }
        });


        $("#amount").val("$" + $("#vps-slider").slider("value"));
        $('#vps-slider').slider('value', starting_point);
        $('.vps-plan').click(function() {
            tt_amount = parseInt(this.id.slice(5)) + 1;
            $('#vps-slider').slider('how_much', tt_amount);
        });
    });
    </script>
    
</body>

</html>