<?

// jesli nie podano parametru id, przekieruj do listy książek
if(empty($_GET['id'])) {
    header("Location: ksiazki.lista.php");
    exit();
}

$id = (int)$_GET['id'];

include 'header.php';
require_once 'classes/Ksiazki.php';

$ksiazki = new Ksiazki();
$dane = $ksiazki->pobierz($id)

?>

<h2><?=$dane['tytul']?></h2>

<p>
	<a href="ksiazki.lista.php">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		Powrót
	</a>
</p>
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>Id</th>
			<th>Id autora</th>
                        <th>Id kategorii</th>
                        <th>Tytul</th>
                        <th>Opis</th>
                        <th>Cena PLN</th>
                        <th>Liczba stron</th>
                        <th>ISBN</th>
                        <th>Zdjecie</th>
		</tr>
	</thead>
	<tbody>
                <tr>
                        <td><?=$dane['id']?></td>
                        <td><?=$dane['id_autora']?></td>
                        <td><?=$dane['id_kategorii']?></td>
                        <td><?=$dane['tytul']?></td>                               
                        <td><?=$dane['opis']?></td>
                        <td><?=$dane['cena']?></td>
                        <td><?=$dane['liczba_stron']?></td>
                        <td><?=$dane['isbn']?></td>
                        <td>
                                <? if(!empty($dane['zdjecie'])): ?>
                                        <img src="zdjecia/<?=$dane['zdjecie']?>" alt="<?=$dane['tytul']?>" />
                                <? else: ?>
                                        brak zdjęcia
                                <? endif; ?>
                        </td>
                </tr>
	</tbody>
</table>

<? include 'footer.php'; ?>