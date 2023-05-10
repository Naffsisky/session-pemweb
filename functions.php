<?php
$conn = mysqli_connect("localhost", "root", "", "pemweb");

if (!$result){
    echo mysqli_error($conn);
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function signup($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert('username sudah terdaftar!');
            </script>
        ";
        return false;
    }
    if ($password !== $password2){
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$username', '$email', '$password')");
    return mysqli_affected_rows($conn);
}

?>