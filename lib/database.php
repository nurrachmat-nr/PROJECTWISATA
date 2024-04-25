<?php
class Database {
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "db_pariwisata";
	private $db;

    public function __construct(){
        $this->bukaKoneksi();
    }

	//digunakan untuk menghubungkan ke database mysql
	public function bukaKoneksi (){
		try {
			//Connection String
			//mysql:hosy=NAMASERVER;dbname=NAMADATABASE
			$this->db = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
            die($e->getMessage());
		}
	}

	//digunakan untuk menginsert data ke database
	public function insertData($table, $data = array()){
		try {
			// prepare sql and bind parameters
			$column = array_keys($data);
			$cols = [];
			foreach($column as $col){
				$cols[] = ":".$col;
			}	
			$stmt = $this->db->prepare("INSERT INTO $table (".implode(",", $column).")
			VALUES (".implode(",", $cols).")");
			foreach($columns as $key=>$val){
				$stmt->bindParam(':'.$key, $$val);

			}	
			$stmt->execute();
		  
			return true;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}

	//digunakan untuk menginsert data ke database
	public function updateData($table, $data = array(), $id){
		try {
			// prepare sql and bind parameters
			$column = array_keys($data);
			$cols = [];
			foreach($column as $col){
				$cols[] = $col." = ?";
			}	
			$stmt = $this->db->prepare("UPDATE $table SET ".implode(",", $cols)." WHERE id = $id");
			
			$stmt->execute(array_values($data));
		  
			return true;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}

	//digunakan untuk mengambil list data dari database
	public function getListData($table){
		//execute the query
		//$data = $this->db->query($query);
		//convert result resource to array
		//return $data->fetchAll(PDO::FETCH_ASSOC);

		$stmt = $this->db->prepare("SELECT * FROM $table order by id asc"); 
		$stmt->execute(); 
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	//digunakan untuk mengambil satu data dari database
	public function getData($table, $id){
		$stmt = $this->db->prepare("SELECT * FROM $table WHERE id=? LIMIT 1"); 
		$stmt->execute([$id]); 
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	//digunakan untuk menghapus satu data dari database
	public function delete($table, $id){
		try{
			// sql to delete a record
			$sql = "DELETE FROM $table WHERE id=$id";
			// use exec() because no results are returned
			$this->db->exec($sql);
			return true;
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
	
}

?>