<form action="<?= site_url('page/save') ?>" method="POST" enctype="multipart/form-data" id="form-page">
    <?= _csrf() ?>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Create New Page</h5>

            <div class="form-group">
                <label for="page_name">Nama Halaman</label>
                <textarea class="form-control" id="page_name" name="page_name" maxlength="500" required
                          placeholder="Enter page title"><?= set_value('page_name') ?></textarea>
                <?= form_error('page_name') ?>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" id="photo" name="photo" class="file-upload-default" data-max-size="10000000" required>
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload photo">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-success btn-simple-upload" type="button">
                            Upload
                        </button>
                    </span>
                </div>
                <?= form_error('photo') ?>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" maxlength="500"
                          placeholder="Enter content"><?= set_value('content') ?></textarea>
                <?= form_error('content') ?>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <button onclick="history.back()" type="button" class="btn btn-light">Back</button>
                <button type="submit" class="btn btn-success mr-2" data-toggle="one-touch" data-touch-message="Saving...">Save Page</button>
            </div>
        </div>
    </div>
</form>

<?php $this->load->view('partials/modals/_alert') ?>

<script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>

<script>
        CKEDITOR.replace( 'content', {
            extraPlugins : 'emoji,colorbutton,justify',
            // removeButtons : 'Underline,Subscript,Superscript,Styles,Table,Symbol,SpecialChar',
            // removePlugins : 'link,image,blockquote,format,horizontalrule,about,list',
        } );
</script>