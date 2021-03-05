<?php 
include_once "functions.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $errors=[];

    // name: required | string | min:5 | Max:255

    if(empty($name)){
        $errors[]="Name is required";
    
    }elseif(! is_string($name)){
        $errors[]="Name Must be string";
    }elseif(strlen($name)>255 && strlen($name)<5){
        $errors[]="User name Max 255 And Min 5 chars";
    }

    // description : optional | string

    if(! is_string($description)){
        $errors[]="Description Must be String";
    }

    // price : required | number | min:0

    if(empty($price)){
        $errors[]="Price Is Required";
    }elseif(strlen($price)<0){
        $errors[]="User Price Min 0 ";
    }
    if(!empty($errors)){
        print_r ($errors);
    }else{
        $priceresult= getPriceWithDiscount($price);
        echo "Product Name Is $name <br>";
        if(!empty($description)){echo "Description Is $description <br>";}
        echo "Price Before Discound Is $price <br>";
        echo "Price After Discound Is $priceresult";
    }
}
?>