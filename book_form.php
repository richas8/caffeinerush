<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $menu = $_POST['menu'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];

        $request = " insert into book_form(name, email, address, menu, amount, price) values ('$name','$email','$address','$menu','$amount','$price')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }
    

?>