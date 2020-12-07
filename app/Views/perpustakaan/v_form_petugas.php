<section class="resume-section">
    <div class="resume-section-content container">
        <h3 class="mb-5"><?php echo $title ?></h3>
        <?php echo form_open_multipart(base_url().'/perpustakaan/submit/petugas') ?>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Petugas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_petugas" autocomplete="off" value="<?= $data['nama_petugas'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jabatan" autocomplete="off" value="<?= $data['jabatan'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
        </form>
    </div>
</section>