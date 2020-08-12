<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="div row">
        <div class="div col-lg-6">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Menu Name</label>
                    <input type="hidden" name="id" value="<?= $menu['id']; ?>" class="form-control" id="id">
                    <input type="text" name="menu" value="<?= $menu['menu']; ?>" class="form-control" id="menu">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('menu'); ?></small>
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->