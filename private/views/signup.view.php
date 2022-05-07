<?php $this->view('includes/header') ?>
<div class="container-fluid">
    <div class="m-auto shadow rounded"
         style="margin-top:50px; width:100%; max-width:310px; padding:30px; ">
        <h2 style="text-align:center;">My School</h2>
        <img src="https://source.unsplalsh.com/random/1" class="border border-primary d-block mx-auto rounded-circle"
             style="width:100px;"/>
        <h3>Add User</h3>
        <input class="my-2 form-control" type="text" name="firstname" placeholder="First Name"/>
        <input class="my-2 form-control" type="text" name="lastname" placeholder="Last Name"/>
        <input class="my-2 form-control" type="email" name="email" placeholder="Email"/>
        <select class="my-2 form-control">
            <option>--Select a Gender--</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <select class="my-2 form-control">
            <option value="">--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="reception">Reception</option>
            <option value="lecturer">Lecturer</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>
        <input class="my-2 form-control" type="password" name="password" placeholder="Password"/>
        <input class="my-2 form-control" type="password" name="password2" placeholder="Retype Password"/>
        <br>
        <button class="btn btn-primary">Add User</button>
        <button class="btn btn-danger float-end text-white">Cancel</button>
    </div>
</div>
<?php $this->view('includes/footer') ?>
