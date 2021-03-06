<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/client/app.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<div class="container">
<div class="derniere-video">
Derniers ajouts
</div>
<div class="gallery js-flickity "
  data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
  <div class="gallery-cell"><a id="link-1" href=""><img id="recent-1" src=""></a></div>
  <div class="gallery-cell"><a id="link-2" href=""><img id="recent-2" src=""></a></div>
  <div class="gallery-cell"><a id="link-3" href=""><img id="recent-3" src=""></a></div>

</div>
       
<div class="dernieres_catagories">
  <h1>Categories</h1>
  
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($categorie->nom[2]); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</div>
<div class="derniere-video">
       Thématique
        </div>

      <div class="parent cateVideo">
<div class="div1"> <img src="img/<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($categorie->nom[0]); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-petit-triangle.jpg" alt=""></div>
<div class="div2"> <img src="img/audio-petit-triangle.jpg" alt=""></div>
<div class="div3"> <img src="img/economie-petit-triangle.jpg" alt=""></div>
<div class="div4"> <img src="img/environnement-image-petit-triangle.jpg" alt=""></div>
<div class="div5"> <img src="img/histoire-petit-triangle.jpg"alt=""></div>
<div class="div6"> <a href="/article"><img src="img/manuscrit-petit-triangle.jpg" alt=""></a></div>
<div class="div7"> <a href="/photo"><img src="img/photo_image-petit-triangle.jpg"alt=""></a></div>
<div class="div8"> <a href="/mediatheque/video"><img src="img/video_image-petit-triangle.jpg" alt=""></a></div>

</div>

<div class="audio">
       <p>Audio</p> 
         </div>
 
       <div class="parent cateVideo">
 <div class="div1"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div2"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div3"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div4"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div5"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div6"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div7"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div8"> <img src="https://via.placeholder.com/250" alt=""></div>
       </div>

       <div class="video">
           <p>Vidéo</p>
             </div>
     
           <div class="parent cateVideo">
     <div class="div1"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div2"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div3"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div4"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div5"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div6"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div7"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div8"> <img src="https://via.placeholder.com/250" alt=""></div>
           </div>
</div>

<!-- partial -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script type="text/javascript" src="<?php echo e(asset('js/admin/manageMemoires.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/client/affichage.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cyberun-1/Projet/memoireNumerique/resources/views/client/mediatheque.blade.php ENDPATH**/ ?>