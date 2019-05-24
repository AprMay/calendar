<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='vendor/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/packages/list/main.css' rel='stylesheet' />
    <script src='vendor/fullcalendar/packages/core/main.js'></script>
    <script src='vendor/fullcalendar/packages/interaction/main.js'></script>
    <script src='vendor/fullcalendar/packages/daygrid/main.js'></script>
    <script src='vendor/fullcalendar/packages/timegrid/main.js'></script>
    <script src='vendor/fullcalendar/packages/list/main.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                defaultDate: '<?php echo date("Y-m-d",time());?>',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                aspectRatio:1.5,
                handleWindowResize:true,
                eventLimit: true, // allow "more" link when too many events
                events: <?php echo $events;?>
            });

            calendar.render();
        });

    </script>
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1200px;
            margin: 0 auto;
        }

    </style>
</head>
<body>

<div id='calendar'></div>

</body>
</html>
