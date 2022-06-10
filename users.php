<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./app.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="./register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container-fluid bg-primary text-white pt-1 pb-1">
            <div class=" container main row">
                <div class="col-10">
                    <p class="fw-bolder pt-2"> User management App</p>
                </div>
                <div class=" text-end col-2">
                    <p class="fw-bolder bg-white text-dark text-center p-2 rounded mt-2">About us</p>
                </div>
            </div>
        </div>
 </header> 
 <section>
 <?php
     $connection = mysqli_connect("localhost", "root", "", "crudProject");
     if(!$connection){
         echo "Error connecting";
     }else{
         $query = "SELECT * FROM users";
         $select = mysqli_query($connection, $query);?>
     <div class="container-fluid mycontainer">
     <?php while ($row = mysqli_fetch_assoc($select)){?>
    
       <div class="container  w-96 row mx-auto">
            <div class="col-5 shadow-lg mt-5  pb-0 pt-2 mx-4">
            <div class=" images">
                <img src="./jerive.jpg" class="img-responsive" alt="">
                 <p><i  class="fa-solid fa-ellipsis " data-bs-toggle="modal"  data-bs-target="#mydiv"></i></p>
             </div>
            <table class="table mt-5 w-100 mx-auto table-borderless">
            <thead>
                <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th>username</th>
                <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
  
                <td><?=$row['firstname']?></td>
                <td><?=$row['lastname']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['email']?></td>
                </tr>
            </tbody>
            </table>
            </div>
            <div class="col-5 mx-4 shadow-lg mt-5  pb-0 pt-2">
             <div class="row">
                <div class="col-10">
                <img src="./jerive.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-2">
                    <p><i data-bs-toggle="modal" data-bs-target="#mydiv" class="fa-solid fa-ellipsis"></i></p>
                </div>
             </div>
            <table class="table mt-5 w-100 mx-auto table-borderless">
            <thead>
                <tr>
               
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th>usernames</th>
                <th scope="col">email</th>
      
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?=$row['firstname']?></td>
                <td><?=$row['lastname']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['email']?></td>
                
                </tr>
            </tbody>
            </table>
            </div>
            </div>
            
            <?php }} ?>
            </div>

            <div class=" modal moda-lg modal-fade shadow fade"  id="mydiv">
              <div class="modal-dialog  centered">
                <div class=" p-4 text-center modal-content">
                <div class="row">
                      <div class="col-11">

                      </div>
                      <div class="col-1">
                          <button class="btn fw-bolder btn-close close" data-dismiss="modal"></button>
                      </div>
                  </div>
                 <p>What do you want to do with valens?</p>
                 <div class="w-50 mx-auto p-4 d-flex flex-row">
                     <button type="button" class="btn btn-danger">Delete</button>
                     <button type="button" class="btn mx-4 btn-white border border-primary ">update</button>
                 </div>
                </div>
              </div>

            </div>
 </section>

    
</body>
</html>