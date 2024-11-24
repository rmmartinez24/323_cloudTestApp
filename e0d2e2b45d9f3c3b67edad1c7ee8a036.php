<!-- Create User Form -->
<h1>Create User</h1>
<form method="POST" action="<?php echo e(route('users.store')); ?>">
  <?php echo csrf_field(); ?>
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  
  <label for="email">Email:</label>
  <input type="email" name="email" required>
  
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  
  <button type="submit">Create User</button>
</form>
<?php /**PATH /Users/rodmartinez/cloudTestApp/resources/views/users/create.blade.php ENDPATH**/ ?>