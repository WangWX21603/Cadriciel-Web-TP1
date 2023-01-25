
<?php $__env->startSection('title', 'Accueil'); ?>
<?php $__env->startSection('content'); ?>


<div class="container my-5">
    <div class ="nav justify-content-end">
        <a href="<?php echo e(route('etudiant.create')); ?>" class="btn btn-primary">
        Ajouter un étudiant
        </a>
    </div>
    
    <p class="fw-semibold fs-3">Liste des étudiants</p>

    <table class="table table-hover my-4">
        <thead class="bg-secondary text-center">
            <tr>
            <th scope="col" class="text-white">Nom</th>
            <th scope="col" class="text-white">Email</th>
            <th scope="col" class="text-white">Phone</th>

            <th scope="col" class="text-white">Adresse</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td scope="row"><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>" class="text-decoration-none text-black text-left"><?php echo e($etudiant->nom); ?></a> </td>
                    <td scope="row"><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>" class="text-decoration-none text-black text-left"><?php echo e($etudiant->email); ?></a></td>
                    <td scope="row"><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>" class="text-decoration-none text-black text-left"><?php echo e($etudiant->phone); ?></a></td>
                    <td scope="row"><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>" class="text-decoration-none text-black text-left"><?php echo e($etudiant->adresse); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="text-danger"> Aucun article de etudiant disponible </li>
            <?php endif; ?>
        </tbody>
    </table>
    
    <div class="text-center py-3 fw-semibold"><?php echo e($etudiants); ?></div>
                
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\College_Maisonneuve\session_4_cadriciel\TP1\Maisonneuve2194804\resources\views/etudiant/index.blade.php ENDPATH**/ ?>