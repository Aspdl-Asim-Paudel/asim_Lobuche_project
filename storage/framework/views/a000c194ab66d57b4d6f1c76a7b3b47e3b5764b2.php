</<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
</head>
<body>
<a href='/create'> <button>Create</button> </a>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Dob</th>
        <th>Image</th>
    </tr>
    <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <th><?php echo e($student->name); ?></th>
            <th><?php echo e($student->address); ?></th>
            <th><?php echo e($student->age); ?></th>
            <th><?php echo e($student->dob); ?></th>
            <th><img style="width: 20px; height: auto" src="<?php echo e(asset('storage/image/'.$student->image)); ?>"></th>
            <td><a href="<?php echo e(url('/edit/' . $student->id)); ?>">Edit</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\calendar\resources\views/list.blade.php ENDPATH**/ ?>