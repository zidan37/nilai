<selection class="content">
    <div class="row">
        <div class="col-8">
            <h1>edit Modul Jurusan</h1>
        </div>
        <div class="col-4">
            <a href="?m=jurusan&s=tampil" class="btn btn-large btn-info" style="float:right">kembali</a>
        </div>
        <?php
        include_once('config.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM jurusan WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=jurusan&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama jurusan</label>
                    <input type="text" name="jurusan" value ="<?= $r['jurusan'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Kapasitas</label>
                    <input type="text" name="kapasitas" value ="<?= $r['kapasitas'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Terisi</label>
                    <input type="text" name="terisi" value ="<?= $r['terisi'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?=$r['id'];?>">
                    <input type="reset" class="btn btn-info">&nbsp;
                    <input type="submit" name="update" value="simpan" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</selection>