

<h1 class="mt-5 text-center"  style="color: black">  Register</h1>
<div class="container register">
  
    <form method="POST" action="" class="container mt-5">
        <?php echo csrf_field(); ?>
        <div class="mb-3" style="color: black">
          <label for="exampleInputEmail1" class="form-label">NIK</label>
          <input type="text" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" style="color: black">
          <label for="exampleInputPassword1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
        </div>
        <div class="mb-3" style="color: black">
          <label for="exampleInputPassword1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputPassword1">
        </div>
        <div class="mb-3" style="color: black">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputall1">
        </div>
        <div class="mb-3" style="color: black">
          <label for="exampleInputPassword1" class="form-label">Telepon</label>
          <input type="text" class="form-control" name="telp" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check" style="color: black">
          <input type="checkbox" class="form-check-input" name="rememberMe" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Register</button></center>
      </form>

      
      
</div>
<?php echo $__env->make('layouts.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel-syaaa\resources\views//register.blade.php ENDPATH**/ ?>