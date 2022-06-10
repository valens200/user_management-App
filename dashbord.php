<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>
</head>
<body>
        <div class="info">
            <div class="sidebar">
                <div class="title">

                    <h1><i class="fa-solid fa-compress"></i>  MANGAPP<span class="span">.</span></h1>
                </div>
             <div class="mybar">
                <div class="side">
                    <p><i class="fa-solid fa-gauge-low"></i> Dashboard</p>
                </div>
                <div class="side">
                    <p><i class="fa-solid fa-calendar-check"></i>  Appointment</p>
                </div>
                <div class="side">
                    <p> <i class="fa-solid fa-user-nurse"></i> Adimins</p>
                </div>
                <div class="side">
                    <p class="para"><i class="fa-solid fa-user"></i> Users</p>
                </div>
                <div class="side">
                    <p><i class="fa-solid fa-bed-pulse"></i> Recently added</p>
                </div>
                <div class="side">
                    <p ><i class="fa-solid fa-message"></i>  Charts</p>
                </div>
                <div class="side">
                    <p> <i class="fa-solid fa-square-phone"></i> Calls</p>
                </div>
             </div>

            </div>
            <div class="main">
                <div class="userInfo">
                    <div class="serach">
                        <!-- <input type="text" placeholder="search by patients.."> -->
                    </div>
                    <div class="profile">
                        <i class="fa-solid fa-bell"></i>
                        <img src="jerive.jpg" alt="">
                        <p>paul</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="bg">
                    <div class="users">
                        <div class="username">
                            <p class="text-dark fw-bolder"> Recently added users</p>
                        </div>  
                        <div class="register">
                           <a href="./register.php" class="  text-decoration-none text-white"><p class="text-decoration-none">Register user</p></a>
                        </div>
                    </div>
                    
                    <div class="table">
                        <div class="row">
                            <div class="name list">
                                <p>First Name</p>
                            </div>
                            <div class="contact list">
                               <p>Last Name</p>
                           </div>
                           <div class="Region list">
                               <p>username</p>
                           </div>
                           <div class="status list">
                               <p>contact</p>
                           </div>
                           <div class="bd-pri">
                           <a href="./users.php" class="  text-decoration-none text-white"><p class="text-decoration-none">Vew  All</p></a>
                           </div>
                        </div>
                       
                        <?php
                          $connection = mysqli_connect("localhost", "root", "", "crudProject");
                          if(!$connection){
                            echo "Error connecting";
                          }else{
                              $select = mysqli_query($connection, "SELECT * FROM users");?>
                             <?php while($row=mysqli_fetch_assoc($select)){?>
                                <div class="roww row">
                                <div class="name list">
                                <p><?=$row['firstname']?></p>
                                <p><?=$row['lastname']?></p>
                                </div>
                                <div class="contact list">
                                <p><?=$row['username']?></p>
                            </div>
                                <div class="Region list">
                                    <p><?=$row['username']?></p>
                                </div>
                                <div class="status list">
                                    <p class="active"><?=$row['email']?></p>
                                </div>
                                <div class="action list">
                                    <!-- <p>action</p> -->
                                </div>
                        </div>
                              <?php }}?>
                        </div>
                        <div class="pagination">
                            <div class="navigate">
                                <p>MOve on</p>
                                <div>
                                    <p>&copy; valens niyonsenga at Rwanda coding academy</p>
                                </div>

                            </div>
                            <div class="pages">
                               <p class="maini">1</p>
                               <p class="maini">2</p>
                               <p class="maini">3</p>
                               <p class="maini">4</p>
                               <p class="maini">5</p>
                               <p class="dots"> .......</p>
                                
                            </div>
                            
                        </div>
                   </div>
                </div>

            </div>
        </div>
    </header>
    
</body>
</html>