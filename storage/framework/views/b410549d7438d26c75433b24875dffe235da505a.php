<?php $__env->startSection('content'); ?>
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4><?php echo e($modify == 1 ? 'Modify Client' : 'New Client'); ?></h4>
        <form action="<?php echo e($modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

            <div class="medium-4  columns">
            <label>Title</label>
            <select name="title">
            <?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($title); ?>" ><?php echo e($title); ?>.</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="name" type="text" value="<?php echo e(old('name') ? old('name') : $name); ?>">
            <small class="error"><?php echo e($errors->first('name')); ?></small>
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="last_name" type="text" value="<?php echo e(old('last_name') ? old('last_name') : $last_name); ?>">
            <small class="error"><?php echo e($errors->first('last_name')); ?></small>
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="address" type="text" value="<?php echo e(old('address') ? old('address') : $address); ?>">
            <small class="error"><?php echo e($errors->first('address')); ?></small>
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
            <input name="zip_code" type="text" value="<?php echo e(old('zip_code') ? old('zip_code') : $zip_code); ?>">
            <small class="error"><?php echo e($errors->first('zip_code')); ?></small>
          </div>
          <div class="medium-4  columns">
            <label>City</label>
            <input name="city" type="text" value="<?php echo e(old('city') ? old('city') : $city); ?>">
            <small class="error"><?php echo e($errors->first('city')); ?></small>
          </div>
          <div class="medium-4  columns">
            <label>State</label>
            <input name="state" type="text" value="<?php echo e(old('state') ? old('state'): $state); ?>">
            <small class="error"><?php echo e($errors->first('state')); ?></small>
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="email" type="text" value="<?php echo e(old('email') ? old('email') : $email); ?>">
            <small class="error"><?php echo e($errors->first('email')); ?></small>
          </div>
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>