<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p>Witaj na stronie główej dzienniczka.</p>
			<br />
			<table class="table table-responsive">
				<tr class="info"><td class="main" colspan="4">Zestawienie zbiorowe</td></tr>
				<tr class="active"><td>Lp.</td><td>Imię</td><td>Nazwisko</td><td>Obecny w dniach:</td></tr>
				<?php
					foreach($_SESSION['users'] as $lp => $wartosc) 
					{
						$przebieg = 0;
						echo "<tr><td><b>".$lp."</b></td>";
						for($i=0; $i<count($wartosc); $i++)
						{
							echo "<td>".$wartosc[$i]."</td>";
						}
						echo "<td>";
						foreach ($_SESSION['view'][$lp] as $kiedy) 
						{
							if($przebieg!=0) echo $kiedy.", ";
							else $przebieg = 1;
						}
						echo "</td></tr>";
					}
				?>
			</table>
		</div>
	</div>
</div>