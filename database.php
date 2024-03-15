<?php 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'peminjaman');
$koneksi=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Gagal terhubung dengan Database: " . mysqli_error($dbconnect));

function tampildata()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT barang.id, barang.kode_brg, barang.nama_brg, barang.kategori, barang.merk, barang.jumlah from barang ");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function tampildata_user()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT Id, No_identitas, Nama, Status, Username, Password, Role  from user ");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function show_catatan_user($id_user)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user';");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function inputdata($inputdata)
    {
        global $koneksi;
        $sql=mysqli_query($koneksi,$inputdata);
        return $sql;
    }

    function Editdata($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
        return $hasil;
    }

    function update($table, $data, $id)
    {
        global $koneksi;
        $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

   function Delete($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
        return $hasil;
    }

    function cek_login($username,$password){
		global $koneksi; 
		$uname = $username;
		$upass = $password;		
		$hasil = mysqli_query($koneksi,"select * from user where username='$uname' and password=md5('$upass')");
		$cek = mysqli_num_rows($hasil);
		if($cek > 0 ){
            $query = mysqli_fetch_array($hasil);
            $_SESSION['Id'] = $query['Id'];
            $_SESSION['Username'] = $query['Username'];
            $_SESSION['Role'] = $query['Role'];
			return true;		
        }
		else {
			return false;
		}	
	}
?>