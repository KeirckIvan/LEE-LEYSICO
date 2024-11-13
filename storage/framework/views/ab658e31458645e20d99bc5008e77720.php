<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Students</h1>
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary mb-3">Add New Student</a>

    <!-- Display Success Message -->
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <!-- Students Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->age); ?></td>
                    <td>
                        <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning">Edit</a>

                        <!-- Delete Form -->
                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
                            <?php echo method_field('DELETE'); ?> <!-- Use the Blade method directive -->
                            <?php echo csrf_field(); ?> <!-- CSRF Token for security -->
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_activity\resources\views/students/index.blade.php ENDPATH**/ ?>