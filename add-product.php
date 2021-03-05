<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="handle-add-product.php">
        <input class="form-control mt-5 w-75" type="text" name="name" placeholder="ProductName">
        <br>
        <textarea class="form-control w-75" placeholder="Textarea" name="description"></textarea>
    <br>
        
        <input class="form-control w-75" type="number" name="price" placeholder="ProductPrice">
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit<button>

    </form>
</body>
</html>