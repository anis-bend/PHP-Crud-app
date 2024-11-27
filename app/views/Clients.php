<h1>Clients</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= $client['name'] ?></td>
            <td><?= $client['email'] ?></td>
            <td><?= $client['phone'] ?></td>
            <td><?= $client['address'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
