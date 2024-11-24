<!-- Edit User Form -->
<form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo e($user->email); ?>" required>

    <button type="submit">Update User</button>
</form>
<?php /**PATH /Users/rodmartinez/cloudTestApp/resources/views/users/edit.blade.php ENDPATH**/ ?>