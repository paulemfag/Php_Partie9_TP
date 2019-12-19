<?php include 'header.php'; ?>
<div class="container">
    <form method="POST" action="calendar.php" class="bg-secondary ml-auto">
        <div class="form-group ml-2">
            <label for="months">Mois : </label>
            <select name="months" id="months">
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select>
        </div>
        <div class="form-group ml-2">
            <label for="years">Année : </label>
            <select name="years" id="years">
                <?php
                for ($year = 1900; $year <= 2019; $year++) {
                    echo "<option value=" . $year . ">" . $year . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group ml-2">
            <input class="btn btn-primary"type="submit" value="Générer le calendrier">
        </div>
    </form>
</div>