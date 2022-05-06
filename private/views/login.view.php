<?php $this->view('includes/header') ?>
<div class="container-fluid">
    <div class="m-auto shadow rounded"
         style="margin-top:50px; width:100%; max-width:310px; padding:30px; ">
        <h2 style="text-align:center;">My School</h2>
        <img src="https://source.unsplalsh.com/random" class="border border-primary d-block mx-auto rounded-circle"
             style="width:100px;"/>
        <h3>Login</h3>
        <input class="form-control" type="email" name="email" placeholder="Email"/>
        <br>
        <input class="form-control" type="password" name="password" placeholder="Password"/>
        <br>
        <button class="btn btn-primary">Login</button>
    </div>
</div>
<?php $this->view('includes/footer') ?>
