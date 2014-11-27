 <link href="<?= base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
 <link href="<?= base_url(); ?>assets/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
 <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
 <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
 <style type="text/css">
    .fc-event{
        border: 0;
    }
 </style>
 <div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-9 col-md-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Calendario </h5>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Eventos</h5>                    
                </div>
                <div class="ibox-content">
                    <div id='external-events'>
                        <div class='external-event navy-bg'>Grupo</div>
                        <div class='external-event yellow-bg'>Subcomision</div>
                        <div class='external-event red-bg'>Activos</div>
                        <div class='external-event blue-bg'>AVEIT</div>                        
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
</div>
</div>
<script src="<?= base_url(); ?>assets/js/plugins/fullcalendar/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= base_url(); ?>assets/js/inspinia.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI custom -->
<script src="<?= base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>

<!-- iCheck -->
<script src="<?= base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="<?= base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<script>

    $(document).ready(function() {

        $("ul > li").removeClass("active");
        $("#navCalendar").addClass("active");

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

        /* initialize the external events
         -----------------------------------------------------------------*/
/*

        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });*/


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            timezone: "local",
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'Rendicion',
                    start: "2014-11-6 09:00:00",
                    end: "2014-11-6 20:00:00",                    
                    className: "blue-bg"
                },
                {
                    title: 'Rendicion',
                    start: "2014-11-7 09:00:00",
                    end: "2014-11-7 20:00:00",
                    className: "blue-bg"
                },
                {
                    title: 'Reunión G49',
                    start: "2014-11-19 23:00:00",
                    className: "navy-bg"
                },
                {
                    title: 'Fiesta Bienvenida',
                    start: "2014-11-22 23:00:00",
                    className: "blue-bg"
                },
                {
                    title: 'Reunión Activos',
                    start: "2014-11-25 23:00:00",
                    className: "red-bg"
                }
            ],

            eventClick: function(calEvent, jsEvent, view) {
               
                alert('Event: ' + calEvent.title + " " + new Date(calEvent.start) + " " + new Date(calEvent.end));

        // change the border color just for fun
            $(this).css('border-color', 'red');

            }
        });




    

    });

</script>
</body>

</html>

