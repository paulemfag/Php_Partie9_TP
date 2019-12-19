<?php
$month = $_POST['months'];
$year = $_POST['years'];
include 'header.php';
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
?>
<?php
// changement de la date en celle choisie
$date = new DateTime();
$date->setDate($year, $month, 1);
$date->format('l');
//tableau qui va de 1 jusqu'au dernier jour du mois
$monthLength = range(1, $numberOfDays);
//print_r($monthLength);
//conversion des mois int en string
if ($month == 1) {
    $title = 'Janvier';
}
if ($month == 2) {
    $title = 'Février';
}
if ($month == 3) {
    $title = 'Mars';
}
if ($month == 4) {
    $title = 'Avril';
}
if ($month == 5) {
    $title = 'Mai';
}
if ($month == 6) {
    $title = 'Juin';
}
if ($month == 7) {
    $title = 'Juillet';
}
if ($month == 8) {
    $title = 'Août';
}
if ($month == 9) {
    $title = 'Septembre';
}
if ($month == 10) {
    $title = 'Octobre';
}
if ($month == 11) {
    $title = 'Novembre';
}
if ($month == 12) {
    $title = 'Décembre';
}
//test premier jour du mois
if (strpos($date->format('l'), 'Mon') !== false) {
    $first = 'Le premier jour du mois est un Lundi.';
}
if (strpos($date->format('l'), 'Tue') !== false) {
    $first = 'Le premier jour du mois est un Mardi.';
}
if (strpos($date->format('l'), 'Wed') !== false) {
    $first = 'Le premier jour du mois est un Mercredi.';
}
if (strpos($date->format('l'), 'Thu') !== false) {
    $first = 'Le premier jour du mois est un Jeudi.';
}
if (strpos($date->format('l'), 'Fri') !== false) {
    $first = 'Le premier jour du mois est un Vendredi.';
}
if (strpos($date->format('l'), 'Sat') !== false) {
    $first = 'Le premier jour du mois est un Samedi.';
}
if (strpos($date->format('l'), 'Sun') !== false) {
    $first = 'Le premier jour du mois est un Dimanche.';
}
?>
<h1><?= $title . ' ' . $year; ?></h1>
<p><?= $numberOfDays . ' jours dans le mois. / ' . $first; ?></p>
<table class="table striped col-10 ml-5">
    <thead class="table-dark">
    <th>Lundi</th>
    <th>Mardi</th>
    <th>Mercredi</th>
    <th>Jeudi</th>
    <th>Vendredi</th>
    <th>Samedi</th>
    <th>Dimanche</th>
</thead>
<tbody class="table-secondary">
    <tr>
        <?php
        //test premier jour du mois
        if (strpos($date->format('l'), 'Tue') !== false) {
            echo '<td class="bg-secondary"></td>';
        }
        if (strpos($date->format('l'), 'Wed') !== false) {
            echo '<td class="bg-secondary"></td><td class="bg-secondary"></td>';
        }
        if (strpos($date->format('l'), 'Thu') !== false) {
            echo '<td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td>';
        }
        if (strpos($date->format('l'), 'Fri') !== false) {
            echo '<td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td>';
        }
        if (strpos($date->format('l'), 'Sat') !== false) {
            echo '<td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td>';
        }
        if (strpos($date->format('l'), 'Sun') !== false) {
            echo '<td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td><td class="bg-secondary"></td>';
        }
        foreach ($monthLength as $key=> $value) {
            $date = new DateTime();
            $date->setDate($year, $month, $value);
            if(strpos($date->format('l'), 'Sun') !== false){
                ?><td><?= $value; ?></td></tr><tr><?php
            } else {
                ?><td><?= $value ; ?></td><?php
                }
            }
            ?>
    </tr>
</tbody>
</table>
<?php include 'footer.php'; ?>
