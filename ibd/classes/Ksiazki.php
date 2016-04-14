<?

class Ksiazki
{
	/**
	 * Instancja klasy obsługującej połączenie do bazy.
	 *
	 * @var Db
	 */
	private $db;

	public function __construct()
	{
		$this->db = new Db();
	}

	/**
	 * Pobiera wszystkie książki.
	 *
	 * @return array
	 */
	public function pobierzWszystkie()
	{
		$sql = "SELECT k.*, a.id as id_autora, a.imie as imie, a.nazwisko as nazwisko, kat.nazwa
                        FROM ksiazki k, autorzy a, kategorie kat
                        WHERE a.id = k.id_autora
                        AND kat.id = k.id_kategorii";

		return $this->db->pobierzWszystko($sql);
	}

	/**
	 * Pobiera dane książki o podanym id.
	 * 
	 * @param int $id
	 * @return array
	 */
	public function pobierz($id)
	{
		return $this->db->pobierz('ksiazki', $id);
	}

	/**
	 * Pobiera najlepiej sprzedające się książki.
	 * 
	 */
	public function pobierzBestsellery()
	{
		$sql = "SELECT k.*, a.*, CONCAT(a.imie,' ', a.nazwisko) as imie_nazwisko FROM ksiazki k, autorzy a WHERE a.id = k.id_autora ORDER BY RAND() LIMIT 5";

		// uzupełnić funkcję
                return $this->db->pobierzWszystko($sql);
	}

}
