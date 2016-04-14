<?
require_once 'classes/Ksiazki.php';
$ksiazki = new Ksiazki();
$top5 = $ksiazki->pobierzBestsellery();
?>
<div class="col-md-3">
	<h1>Bestsellery</h1>
	<? foreach ($top5 as $t5): ?>

        <a href="ksiazki.szczegoly.php?id=<?=$t5['id']?>" title="szczegóły">
        <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>Tytuł</th>
                <th>Zdjęcie</th>
                <th>Autor</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$t5['tytul']?></td>
                    <td>
                            <? if(!empty($t5['zdjecie'])): ?>
                                    <img src="zdjecia/<?=$t5['zdjecie']?>" alt="<?=$t5['tytul']?>" />
                            <? else: ?>
                                    brak zdjęcia
                            <? endif; ?>
                    </td>                    
                    <td><?=$t5['imie_nazwisko']?></td>
                </tr>
            </tbody>
        </table> 
        </a>
        <? endforeach; ?>
</div>