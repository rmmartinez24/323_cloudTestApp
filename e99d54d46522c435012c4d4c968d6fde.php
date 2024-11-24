<h1>Users</h1>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td>
        <a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>
        <a href="<?php echo e(route('users.show', $user->id)); ?>">Show</a>
        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php /**PATH /Users/rodmartinez/cloudTestApp/resources/views/users/index.blade.php ENDPATH**/ ?>