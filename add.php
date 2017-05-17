<style>
    #search{
                padding: 10px;
                border: #a8d4b1 1px solid;
                border-radius:4px;
            }
</style>
    <div class="add">
        <form method="post">
                <input type="text" name="name" id="search" placeholder="Name">
                <input type="number" name="id" id="search" placeholder="ID">
                <input type="submit" value="ADD" id="search">
        </form>
    </div>
<?php
    if(isset($_POST['name'])){
        $n=$_POST['name'];
        $id=$_POST['id'];
    $con=mysqli_connect("localhost","root","","gol");
    $res="INSERT INTO info(name,id) VALUES('$n','$id')";
    mysqli_query($con,$res);
    }
?>