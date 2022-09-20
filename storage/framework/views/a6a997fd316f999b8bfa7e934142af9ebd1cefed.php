<?php
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<FORM enctype="multipart/form-data" method="post" action="<?php echo e(action([\App\Http\Controllers\PagesController::class,'store'])); ?>" >


<?php echo csrf_field(); ?>
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Address</label>
        <input type="text" name="address" required>
        <label>Age</label>
        <input type="number" name="age" required>
        <label>DOB</label>
        <input type="date" name="dob" required>
        <label>image</label>
        <input type="file" name="image">
        <label>Submit</label>
        <input type="submit" name="submit">


</FORM>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\calendar\resources\views/create.blade.php ENDPATH**/ ?>