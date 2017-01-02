<?php
    include "includes/header.php";
    include "library/User.php";
    $user = new User();//user object create korlam...
?>

<div class="panel panel-info">
    <div class="panel-heading">
        <h2>User list <span class="pull-right"><strong>Welcome : </strong>Faisal</span></h2>
    </div>

    <div class="panel-body">
        <table class="table table-striped">
            <tr>
                <th width="20%">Serial</th>
                <th width="20%">Name</th>
                <th width="20%">Username</th>
                <th width="20%">Email</th>
                <th width="20%">Action</th>
            </tr>

            <tr>
                <td>01</td>
                <td>Faisal Ibn Aziz</td>
                <td>faisal4590</td>
                <td>optimizedfaisal42@gmail.com</td>
                <td><a href="profile.php?id=1" class="btn btn-info">View</a></td>
            </tr>
            <tr>
                <td>02</td>
                <td>Ahmad Salman Sirajee</td>
                <td>salmanbilli</td>
                <td>salmansirajee@gmail.com</td>
                <td><a href="profile.php?id=2" class="btn btn-info">View</a></td>
            </tr>
            <tr>
                <td>03</td>
                <td>Tamim Iqbal</td>
                <td>tamim415</td>
                <td>tamimbasher@gmail.com</td>
                <td><a href="profile.php?id=3" class="btn btn-info">View</a></td>
            </tr>
            <tr>
                <td>04</td>
                <td>Shakib Al Hasan</td>
                <td>shakib69</td>
                <td>shakiballrounder@gmail.com</td>
                <td><a href="profile.php?id=4" class="btn btn-info">View</a></td>
            </tr>
            <tr>
                <td>05</td>
                <td>Mahmudullah Riyad</td>
                <td>riad312</td>
                <td>riadsilentkiller@gmail.com</td>
                <td><a href="profile.php?id=5" class="btn btn-info">View</a></td>
            </tr>

        </table>
    </div>
</div>

<?php
    include "includes/footer.php";
?>
