<?php
include('partials/header.php');

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->index();
//var_dump($contacts);

// Vymazanie správy
if (isset($_GET['delete'])) {
    $contact->destroy($_GET['delete']);
    
    header("Location: admin.php");
    exit;
}

?>

<section class="container">
    <h1>Vítaj admin</h1>

    <h2>Kontakty</h2>

    <table border="1">
        
        <tr>
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Sprava</th>            
            <th>Akcia</th>
        </tr>
        <?php foreach($contacts as $con){
             echo '<tr>';
             echo '<td>'.$con['id'].'</td>';
             echo '<td>'.$con['name'].'</td>';
             echo '<td>'.$con['email'].'</td>';
             echo '<td>'.$con['message'].'</td>';
             echo '<td><a href="?delete='.$con['id'].'" 
             onclick="return confirm(\'Určite chcete vymazať túto správu?\')">Delete</a></td>';
             echo '</tr>';
         } 
         ?>


    </table>



</section>

<?php
include('partials/footer.php');
?>