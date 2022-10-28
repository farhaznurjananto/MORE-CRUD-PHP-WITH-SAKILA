<?php 
    // INCLUDE CONNECTION
    include_once("connection.php");

    // READ DB
    // try {
    //     $stmt = $conn->prepare("SELECT * FROM actor");
    //     $stmt->execute();
    
    //     $result = $stmt->fetchAll();
    //     var_dump($result);
    // } catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }

    // INSERT
    // try {
    //     $firstname = "John";
    //     $lastname = "Aegir";

    //     $sql = "INSERT INTO actor (first_name, last_name) VALUES(?, ?);";
    //     $stmt = $conn->prepare($sql);

    //     $stmt -> bindParam(1, $firstname);
    //     $stmt -> bindParam(2, $lastname);
    
    //     $res = $stmt->execute();
    //     if($res) {
    //         echo "Data berhasil ditambahkan";
    //     } else {
    //         echo "Terdapat kesalahan";
    //     }
    // } catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }

    // UPDATE
    // try {
    //     $firstname = "John";
    //     $lastname = "Wick";
    
    //     $sql = "UPDATE actor SET last_name=? WHERE first_name=?;";
    //     $stmt = $conn->prepare($sql);
        
    //     $stmt -> bindParam(1, $lastname);
    //     $stmt -> bindParam(2, $firstname);
    
    //     $res = $stmt->execute();
    //     if($res) {
    //         echo "Data berhasil diperbarui";
    //     } else {
    //         echo "Terdapat kesalahan";
    //     }
    // } catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }

    // DELETE
    // try {
    //     $actorid = 201;
    
    //     $sql = "DELETE FROM actor WHERE actor_id=?";
    //     $stmt = $conn->prepare($sql);

    //     $stmt -> bindParam(1, $actorid);
    
    //     $res = $stmt->execute();
    //     if($res) {
    //         echo "Data berhasil diperbarui";
    //     } else {
    //         echo "Terdapat kesalahan";
    //     }
    // } catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
?>