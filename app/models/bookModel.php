<?php
require '../config/Database.php';
function getAllBooks()
{
    global $conn;
    $sql = "SELECT * FROM books";
    $query = mysqli_query($conn, $sql);
    $books = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $books[] = $row;
    }

    return $books;
}

function getBookById($id)
{
    global $conn;
    $sql = "SELECT * FROM books WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($query);
}

function addBook($data)
{
    global $conn;

    $title = $data['title'];
    $description = $data['description'];
    $author = $data['author'];
    $publisher = $data['publisher'];
    $year = $data['year'];

    $sql = "INSERT INTO books (title, description, author, publisher, year) VALUES ('$title', '$description', '$author', '$publisher', '$year');";
    return mysqli_query($conn, $sql);
}

function updateBook($data)
{
    global $conn;

    $title = htmlspecialchars($data['title']);
    $description = htmlspecialchars($data['description']);
    $author = htmlspecialchars($data['author']);
    $publisher = htmlspecialchars($data['publisher']);
    $year = $data['year'];
    $id = $data['id'];

    $sql = "UPDATE books SET title = '$title', description = '$description', author = '$author', publisher = '$publisher', year = '$year' WHERE id = $id;";
    return mysqli_query($conn, $sql);
}

function deleteBook($id)
{
    global $conn;
    $sql = "DELETE FROM books WHERE id = $id;";
    mysqli_query($conn, $sql);
}
