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
<FORM enctype="multipart/form-data" method="post" action="<?php echo e(action([\App\Http\Controllers\PagesController::class,'update'])); ?>" >


    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($student->id); ?>">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo e($student->name); ?>" required>
    <label>Address</label>
    <input type="text" name="address" value="<?php echo e($student->address); ?>" required>
    <label>Age</label>
    <input type="number" name="age" value="<?php echo e($student->age); ?>" required>
    <label>DOB</label>
    <input type="date" name="dob" value="<?php echo e($student->dob); ?>" required>

    //image ko hatayeko

    <label>Submit</label>
    <input type="submit" name="submit">


</FORM>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\calendar\resources\views/update.blade.php ENDPATH**/ ?>