<?php $__env->startSection('content'); ?>
    <div class="row">
      <div class="medium-6 columns">
        <h4>Reservations</h4>
        
      </div>
      <table class="stack">
          <thead>
            <tr>
              <th width="150">Date IN</th>
              <th width="150">Date OUT</th>
              <th width="150">Client ID</th>
              <th width="150">Room ID</th>
            </tr>
          </thead>
          <tbody>

          <?php $__currentLoopData = $reservation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($reserve->date_in); ?></td>
                <td><?php echo e($reserve->date_out); ?></td>
                <td><?php echo e($reserve->client_id); ?></td>
                <td><?php echo e($reserve->room_id); ?></td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
                      </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>