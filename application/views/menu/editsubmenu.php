<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="div row">
        <div class="div col-lg-6">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Submenu title</label>
                    <input type="hidden" name="id" value="<?= $submenu['id']; ?>" class="form-control" id="id">
                    <input type="text" name="title" value="<?= $submenu['title']; ?>" class="form-control" id="title">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('title'); ?></small>
                </div>

                <div class="form-group">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="<?= $submenu['menu_id']; ?>">Select menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">URL</label>
                    <input type="text" name="url" value="<?= $submenu['url']; ?>" class="form-control" id="url">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('url'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Icon</label>
                    <input type="text" name="icon" value="<?= $submenu['icon']; ?>" class="form-control" id="icon">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('icon'); ?></small>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" checked name="is_active" name="is_active" type="checkbox" value="1" id="is_active">
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->