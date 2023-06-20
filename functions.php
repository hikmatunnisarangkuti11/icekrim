<?php
$conn = mysqli_connect("sql105.infinityfree.com", "if0_34462902", "qxPmclWHEOK", "if0_34462902_toko");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $wadah = [];
    while($baju = mysqli_fetch_assoc($result)){
        $wadah[] = $baju;
    }
    return $wadah;
}

function tambah($data){
  global $conn;
  $nama = ($data["name"]);
  $almond = ($data["almond"]);
  $chocolate =($data["chocolate"]);
  $cornetto = ($data["cornetto"]);
  $chocolate2 = ($data["chocolate2"]);
  $strawberry = ($data["strawberry"]);

  $query = "INSERT INTO jajanan 
            VALUES ('','$nama', '$almond', '$chocolate', '$cornetto', '$chocolate2', '$strawberry')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM jajanan WHERE id= $id");

  return mysqli_affected_rows($conn);
}
function ubah($data){
  global $conn;
  $id= ($data["id"]);
  $nama = ($data["name"]);
  $almond = ($data["almond"]);
  $chocolate =($data["chocolate"]);
  $cornetto = ($data["cornetto"]);
  $chocolate2 = ($data["chocolate2"]);
  $strawberry = ($data["strawberry"]);
  
  $query ="UPDATE jajanan SET
          name ='$nama',
          almond='$almond',
          chocolate='$chocolate',
          cornetto='$cornetto',
          chocolate2='$chocolate2',
          strawberry='$strawberry'
          WHERE id= $id";
      
      mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
