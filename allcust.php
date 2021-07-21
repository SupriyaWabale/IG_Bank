<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Customer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <style type="text/css">
        button{
        transition: 1.5s;
        }
        button:hover{
        background-color:black;
        color: white;
        }
        </style>
    </head>
    <body>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        ?>
        <?php
        include 'navbar.php';
        ?>
        <div class="container">
            <h2 class="text-center pt-4">All Customers</h2>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-sm">
                        <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center py-2">Id</th>
                                    <th scope="col" class="text-center py-2">Name</th>
                                    <th scope="col" class="text-center py-2">E-Mail</th>
                                    <th scope="col" class="text-center py-2">Balance</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['email']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>