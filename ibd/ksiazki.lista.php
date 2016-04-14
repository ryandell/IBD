<?
include 'header.php';
require_once 'classes/Ksiazki.php';

$ksiazki = new Ksiazki();
$lista = $ksiazki->pobierzWszystkie();

?>

<h1>Książki</h1>

<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Tytuł</th>
			<th>Id autora</th>
                        <th>Nazwisko</th>
                        <th>Imię</th>
			<th>Id kategorii</th>
                        <th>Nazwa kategorii</th>
			<th>Cena PLN</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($lista as $ks): ?>
			<tr>
				<td>
					<? if(!empty($ks['zdjecie'])): ?>
						<img src="zdjecia/<?=$ks['zdjecie']?>" alt="<?=$ks['tytul']?>" />
					<? else: ?>
						brak zdjęcia
					<? endif; ?>
				</td>
				<td><?=$ks['tytul']?></td>
				<td><?=$ks['id_autora']?></td>
                                <td><?=$ks['nazwisko']?></td>
                                <td><?=$ks['imie']?></td>
				<td><?=$ks['id_kategorii']?></td>
                                <td><?=$ks['nazwa']?></td>
				<td><?=$ks['cena']?></td>
				<td>
					<a href="#" title="dodaj do koszyka">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					</a>
					<a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>" title="szczegóły">
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>

<? include 'footer.php'; ?>