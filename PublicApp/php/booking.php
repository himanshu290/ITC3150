<?php
if(isset($_POST['submit']))
{
        $servername = "nb9507.neu.edu";
        $username = "3150sharma";
        $password = "hs6051";
        $dbName="3150sharma";
        $link = new mysqli($servername, $username, $password, $dbName);
        $sql = "INSERT INTO bookingTable (  movieName,
                                            bookingTheatre,
                                            bookingType,
                                            bookingDate,
                                            bookingTime,
                                            bookingFName,
                                            bookingLName,
                                            bookingPNumber)
                VALUES ('".$_POST["theatre"]."',
                        '".$_POST["theatre"]."',
                        '".$_POST["type"]."',
                        '".$_POST["date"]."',
                        '".$_POST["hour"]."',
                        '".$_POST["fName"]."',
                        '".$_POST["lName"]."',
                        '".$_POST["pNumber"]."')";
                        }
        mysqli_close($link);
?>