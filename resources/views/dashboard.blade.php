<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="{{asset('admin-template')}}/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{asset('admin-template')}}/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{asset('admin-template')}}/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{asset('admin-template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin-template')}}/assets/css/master.css" rel="stylesheet">
    <link href="{{asset('admin-template')}}/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }

        .fc-header-toolbar {
            /*
            the calendar will be butting up against the edges,
            but let's scoot in the header's buttons
            */
            padding-top: 1em;
            padding-left: 1em;
            padding-right: 1em;
        }

    </style>
</head>

<body>
<div class="wrapper">
    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <img src="{{asset('admin-template')}}/assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="forms.html"><i class="fas fa-file-alt"></i> Forms</a>
            </li>
            <li>
                <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
            </li>
            <li>
                <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
            </li>
            <li>
                <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
            </li>
            <li>
                <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                <ul class="collapse list-unstyled" id="uielementsmenu">
                    <li>
                        <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Buttons</a>
                    </li>
                    <li>
                        <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Badges</a>
                    </li>
                    <li>
                        <a href="ui-cards.html"><i class="fas fa-angle-right"></i> Cards</a>
                    </li>
                    <li>
                        <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Alerts</a>
                    </li>
                    <li>
                        <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Tabs</a>
                    </li>
                    <li>
                        <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Date & Time Picker</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                <ul class="collapse list-unstyled" id="authmenu">
                    <li>
                        <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                    </li>
                    <li>
                        <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                <ul class="collapse list-unstyled" id="pagesmenu">
                    <li>
                        <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                    </li>
                    <li>
                        <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                    </li>
                    <li>
                        <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
            </li>
            <li>
                <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
            </li>
        </ul>
    </nav>
    <div id="body" class="active">
        <!-- navbar navigation component -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <button type="button" id="sidebarCollapse" class="btn btn-light">
                <i class="fas fa-bars"></i><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="{{route('logout')}}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of navbar navigation -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-header">
                        <h2 class="page-title">Dashboard</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id='calendar-container'>
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--<script src="{{asset('admin-template')}}/assets/vendor/jquery/jquery.min.js"></script>-->
<script src="{{asset('admin-template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin-template')}}/assets/js/script.js"></script>
<script src="{{asset('plugins/full-calendar')}}/index.js"></script>
<script>
    // Sample encoded data
    var encodedData = '{{json_encode($events)}}';

    // Create a temporary element
    var tempElement = document.createElement('div');

    // Set the encoded data as innerHTML
    tempElement.innerHTML = encodedData;

    // Extract the decoded data
    var decodedData = tempElement.textContent || tempElement.innerText;

    // Output the decoded data
    console.log(decodedData);

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      initialView: 'timeGridWeek',
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
            saveEvent(title,arg);
              calendar.addEvent({
                title: title,
                start: arg.start,
                end: arg.end,
                allDay: arg.allDay
              })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          deleteEvent(arg.event);
            arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: JSON.parse(decodedData)
    });

    calendar.render();
    });

    function saveEvent(title, arg){
        //console.log(arg)
        var eventCreateRoute = "{{ route('event_create') }}";
        var csrfToken = "{{ csrf_token() }}";

        $.ajax({
            type: "POST",
            url: eventCreateRoute, // Update with your route
            data: {"title": title, "start": arg.startStr, "end": arg.endStr, "_token": csrfToken},
            success: function(response){
                // Handle successful response
                console.log(response)
            },
            error: function(xhr, status, error){
                // Handle error
                console.error(xhr.responseText);
            }
        });


    }

    function deleteEvent(arg){
        console.log(arg.id)
        var eventDeleteRoute = "{{ route('event_delete') }}";
        var csrfToken = "{{ csrf_token() }}";
        $.ajax({
            type: "POST",
            url: eventDeleteRoute, // Update with your route
            data: {"id": arg.id, "_token": csrfToken},
            success: function(response){
                // Handle successful response
                console.log(response)
            },
            error: function(xhr, status, error){
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }

</script>
</body>

</html>
