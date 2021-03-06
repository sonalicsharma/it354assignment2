<!DOCTYPE html>

<html>
    <head>
        <!-- Website Title & Description for Search Engine purposes -->
        <title>View customer details</title>
        <meta name="description" content="">

        <!-- Mobile viewport optimized -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Bootstrap CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   

    </head>
    <body>
        <div class="container" id="main">
            <div class="navbar navbar-fixed-top navbar-default">
                <div class="container-fluid">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Assignment 2</a>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">

                            <li class = "active"><a>View</a></li>
                            <li><a href = "customer_add.html">Add</a></li>
                        </ul>
                    </div><!-- end nav-responsive-collapse -->
                </div><!-- end container -->
            </div><!-- end navbar -->
            <div class="tab-content">
                <br> <br><br>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Last/Company Name</th>
                                <th>First Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $hn = 'www.it354.com';
                            $db = 'it354_students';
                            $un = 'it354_students';
                            $pw = 'steinway';
                            // Create connection
                            $conn = new mysqli($hn, $un, $pw, $db);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT firstName, lastName, address , city, state ,zip, email, phone FROM customers";

                            $result = mysqli_query($conn, $sql)or die(mysqli_error());
                            $id = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>" . $id . "</td>";
                                echo "<td>" . $row['firstName'] . "</td>";
                                echo "<td>" . $row['lastName'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['city'] . "</td>";
                                echo "<td>" . $row['state'] . "</td>";
                                echo "<td>" . $row['zip'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td></tr>";
                                $id++;
                            }
                            ?>
                        </tbody>
                    </table>
	        </div>
            </div>
        </div>
        <!-- All Javascript at the bottom of the page for faster page loading -->

        <!-- First try for the online version of jQuery-->
        <script src="http://code.jquery.com/jquery.js"></script>

        <!-- If no online access, fallback to our hardcoded version of jQuery -->
        <script>window.jQuery || document.write('<script src="dist/js/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="dist/js/bootstrap.js" type="text/javascript"></script>
        <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="dist/js/npm.js" type="text/javascript"></script>
    </body>
</html>
