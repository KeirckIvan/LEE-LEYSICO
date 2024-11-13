<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1><?php echo e($student->name); ?></h1>
    <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
    <p><strong>Age:</strong> <?php echo e($student->age); ?></p>

    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning">Edit</a>

    <!-- Delete form -->
    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
        <?php echo method_field('DELETE'); ?>  <!-- Use Blade directive for DELETE -->
        <?php echo csrf_field(); ?>  <!-- CSRF token for security -->
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Back to List</a>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_activity\resources\views/students/show.blade.php ENDPATH**/ ?>