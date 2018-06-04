<?php class database {
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "perizinan";
	private $query;

	public function __construct() {
		$this->connection = mysqli_connect($this->host, $this->name, $this->pass, $this->db);
	}
	public function QUERY($query) {
		$this->result = mysqli_query($this->connection, $query);
	}
	public function WHILE(){
		while ($var = mysqli_fetch_array($this->result)) {
			$hasil[] = $var;
		}
		return $hasil;
	}
}

class form extends database {
	public function table() {
		$this->QUERY("");
	}
} ?>