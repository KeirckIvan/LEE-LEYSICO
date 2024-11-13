<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Edit Student</h1>

    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?> <!-- Correct method for updating -->
        <?php echo csrf_field(); ?> <!-- CSRF token for security -->

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $student->name)); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo e(old('email', $student->email)); ?>" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="<?php echo e(old('age', $student->age)); ?>" required min="1">
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_activity\resources\views/students/edit.blade.php ENDPATH**/ ?>