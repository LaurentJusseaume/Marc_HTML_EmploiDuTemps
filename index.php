<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css"/>
  <title>
    Emploi du temps
  </title>
</head>

<body>
	<script src="javascript.js"></script>

	<h1>Emploi du temps des cours de Thomas, Marc et Paul</h1>

	<h3 >Sa = Semaine a &nbsp &nbsp &nbsp &nbsp &nbsp &nbspSb = Semaine b</h3>
        <?php
            $ddate= date('Y-m-d');
            $date = new DateTime($ddate);
            $week = $date->format("W");
	    echo "<h3>numero de semaine: $week</h3>";
	    if($week%2==0){
	      echo "<h3>semaine a</h3>";
	    }else{
	      echo "<h3>semaine b</h3>";
            }
          ?>

	<table class="Thomas">

		<caption>Emploi du temps de Thomas</caption>

		<tr>
			<th>Horaires</th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
		</tr>

		<tr>
			<td>8h10/9h10</td>

			<td>SVT</td>
			<td>Histoire</td>
			<td>Philo</td>
			<td>EPS</td>
			<td>Allemand</td>
		</tr>
		<tr>
			<td>9h10/10h05</td>

			<td>Maths</td>
			<td>Histoire</td>
			<td>Espagnol</td>
			<td>EPS</td>
			<td>Maths</td>
		</tr>
		<tr>
			<td>10h20/11h15</td>

			<td>Anglais</td>
			<td>Maths</td>
			<td>SVT</td>
			<td>Maths</td>
			<td>Espagnol</td>
		</tr>
		<tr>
			<td>11h20/12h10</td>

			<td>Physique</td>
			<td>Allemand</td>
			<td>Philo</td>
			<td>Maths</td>
			<td>***</td>
		</tr>
		<tr>
			<td>midi</td>
                        <td>***</td>
                        <td>***</td>	
                        <td>***</td>
                        <td>***</td>
                        <td>***</td>
		</tr>
		<tr>
			<td>13h45/14h40</td>

			<td>Espagnol</td>
			<td>TP</td>
			<td>***</td>
			<td>SPE</td>
			<td>Philo</td>
		</tr>
		<tr>
			<td>14h40/15h35</td>

			<td>Maths</td>
			<td>TP</td>
			<td>***</td>
			<td>SPE</td>
			<td>Allemand</td>
		</tr>
		<tr>
			<td>15h50/16h45</td>

			<td>Physique</td>
			<td>TP</td>
			<td>***</td>
			<td>Physique</td>
			<td>Anglais</td>
		</tr>
		<tr>
			<td>16h45/17h40</td>

			<td>Educ civique</td>
			<td>TP</td>
			<td>***</td>
			<td>***</td>
			<td>***</td>
		</tr>
	</table>

        <table class="Marc">

		<caption>Emploi du temps de Marc</caption>

		<tr>
			<th>Horaires</th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
		</tr>

		<tr>
			<td >8h10/9h10</td>
			<td >Histoire-geo</td>
                        <td >SVT</td>
			<td >Ga dessin <br>Gb musique</td>
			<td >DST</td>
			<td >Sa Physique</td>
		</tr>
		<tr>
			<td >9h10/10h05</td>
			<td >Sa Français <br>Sb Maths</td>
			<td >Techno</td>
			<td >Anglais</td>
			<td >DST</td>
			<td >Sa SVT</td>
		</tr>
		<tr>
			<td >10h20/11h15</td>
			<td >Physiques</td>
			<td >Histoire geo</td>
			<td >Histoire geo</td>
			<td >Maths</td>
			<td >Anglais</td>
		</tr>
		<tr>
			<td >11h20/12h10</td>
			<td >Pastorale</td>
			<td >Français</td>
			<td >Maths</td>
			<td >Français</td>
			<td >Espagnol</td>
		</tr>
		<tr>
			<td >midi</td>
			<td >***</td>
                        <td >***</td>
			<td >***</td>
			<td >***</td>
			<td >***</td>
		</tr>
		<tr>:
			<td >13h45/14h40</td>
			<td >EPS</td>
			<td >Maths</td>
			<td >***</td>
			<td >Français</td>
			<td >Latin</td>
		</tr>
		<tr>
			<td >14h40/15h35</td>
                        <td >EPS</td>
			<td >Anglais</td>
			<td >***</td>
			<td >Espagnol</td>
			<td >Français</td>
		</tr>
		<tr>
			<td >15h50/16h45</td>
			<td >EPS</td>
			<td >***</td>
			<td >***</td>
			<td >Sa Techno <br>Sb Espagnol</td>
			<td >***</td>
		</tr>
		<tr>
			<td >16h45/17h40</td>
			<td >EPS<br>(occasionnel)</td>
			<td >***</td>
		        <td >***</td>
			<td >***</td>
			<td >***</td>
		</tr>
	</table>

        <table class="Paul">

		<caption>Emploi du temps de Paul</caption>

		<tr>
			<th>Horaires</th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
		</tr>

		<tr>
			<td>8h10/9h10</td>
			<td>Français</td>
			<td>***</td>
			<td>Maths</td>
			<td>***</td>
			<td>***</td>
		</tr>
		<tr>
			<td>9h10/10h05</td>
			<td>Histoireg Géo</td>
			<td>DST</td>
                        <td>Dessin</td>
			<td>Pastorale</td>
			<td>Français</td>
		</tr>
		<tr>
			<td>10h20/11h15</td>
			<td>Anglais</td>
			<td>Maths</td>
			<td>EPS</td>
			<td>Maths</td>
			<td>Technologie</td>
		</tr>
		<tr>
			<td>11h15/12h10</td>
			<td>EPS</td>
			<td>Histoire Géo</td>
                        <td>EPS</td>
			<td>SVT</td>
                        <td>Anglais</td>
		</tr>
		<tr>
			<td>midi</td>
			<td>***</td>
			<td>***</td>
                        <td>***</td>
			<td>***</td>
			<td>***</td>
		</tr>
		<tr>
			<td>13h45/14h40</td>
			<td>Français</td>
			<td>Anglais</td>
			<td>***</td>
			<td>Histoire Géo</td>
			<td>Anglais</td>
		</tr>
		<tr>
			<td>14h40/15h35</td>
			<td>Sa SVT Gb <br>Sb Techno Gb</td>
			<td>Maths</td>
                        <td>***</td>
			<td>Français</td>
			<td>Physique</td>
		</tr>
		<tr>
			<td>15h50/16h45</td>
			<td>Étude survéillée</td>
			<td>Français</td>
			<td>***</td>
			<td>Maths</td>
			<td>***</td>
		</tr>
		<tr>
			<td>16h45/17h40</td>
			<td>***</td>
			<td>***</td>
			<td>***</td>
			<td>***</td>
			<td>***</td>
		</tr>
	</table>
	<table class="Maman">

		<caption>Emploi du temps de Maman</caption>

		<tr>
			<th>Horaires</th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
		</tr>

		<tr>
			<td>8h00/8h55</td>

			<td>Maths 603</td>
			<td></td>
			<td></td>
			<td></td>
			<td>SI:Maths 603A <br>SP:Maths 603B</td>
		</tr>
		<tr>
			<td>8h55/9h50</td>

			<td>Maths 401</td>
			<td></td>
			<td></td>
			<td></td>
			<td>Maths 603</td>
		</tr>
		<tr>
			<td>10h10/11h05</td>

			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>SI:Maths 401</td>
		</tr>
		<tr>
			<td>11h05/12h00</td>

			<td></td>
			<td></td>
			<td></td>
			<td>Maths 401</td>
			<td></td>
		</tr>
		<tr>
			<td>midi</td>

			<td >***</td>
		        <td >***</td>
			<td >***</td>
			<td >***</td>
			<td >***</td>
		</tr>
		<tr>
			<td>13h30/14h25</td>

			<td></td>
			<td>Maths 603</td>
			<td></td>
			<td>SP:Maths 401</td>
			<td></td>
		</tr>
		<tr>
			<td>14h25/15h20</td>

			<td></td>
			<td>SI:Maths 401A <br>SP:Maths 401B</td>
			<td></td>
			<td>Maths 603</td>
			<td></td>
		</tr>
	</table>
	
</body>
</html>
