<?php
    $con = mysqli_connect("localhost", "tisutoo", "thdtjgk2", "tisutoo");

    $userID = $_POST["userID"];
    $courseID = $_POST["courseID"];

    $statement = mysqli_prepare($con, "INSERT INTO SCHEDULE VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "si", $userID, $courseID);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>