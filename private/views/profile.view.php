<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs') ?>
    <div class="row">
        <div class="col-4">
            <img src="<?=ASSETS?>/female.jpg" class="border d-block mx-auto rounded-circle" style="width:100px;"/>
        </div>
        <div class="col-8 bg-light bg-light p-3">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>Frist Name:</th><td>Mary</td>
                </tr>
                <tr>
                    <th>Last Name:</th><td>Phiri</td>
                </tr>
                 <tr>
                    <th>Gender:</th><td>Female</td>
                </tr>
            </table>
        </div>
    </div>

    <div></div>
</div>
<?php $this->view('includes/footer') ?>
