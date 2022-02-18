<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->

        <div class="d-flex justify-content-between pb-3">
            <div></div>
            <button type="button" data-toggle="modal" data-target="#basicModal" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                </span>Add</button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <th>No</th>
                                    <th>Tipe</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($tipe as $t) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $t['nama_tipe']; ?></td>
                                            <td><img src="<?= base_url('rumah/') . $t['image']; ?>" class="mr-3 rounded" width="75"></td>
                                            <td>
                                                <a href="<?= base_url('administrasi/edittipe/') . $t['id']; ?>" type="button" class="btn btn-warning btn-sm">Edit <span class="btn-icon-right"><i class="fa fa-edit"></i></span>
                                                </a>
                                                <a href="<?= base_url('administrasi/delete/') . $t['id']; ?>" type="button" class="btn btn-danger btn-sm ml-3">Delete <span class="btn-icon-right"><i class="fa fa-trash"></i></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Tipe</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="<?= base_url('administrasi/save_tipe'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control input-default " name="nama_tipe" required placeholder="Tipe">
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery-3.6.0.js'); ?>"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<!--**********************************
            Content body end
        ***********************************-->