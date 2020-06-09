<?php

	
	class Crud
	{
	    public $connection;

	    function __construct()
	    {
	    	$host = 'localhost';
	    	$db_name = 'datetime_db';
	    	$username = 'root';
	    	$password = '';

	    	try {
	    		$this->connection = new PDO("mysql:host={$host}; db_name = {$db_name}", $username, $password);
	    	} catch (Exception $e) {
	    		echo "Connection failed";
	    	}
	    }

	    //Retriving from database
	    public function select($query)
	    {
	    	$result = $this->connection->query($query);
	    	return $result::fetchAll(PDO::FETCH_ASSOC);
	    }
	    //Inserting into table
	    public function insert($query');
	    {
	    	$result = $this->connection->exec($query);
	    	return $result->db2_last_insert_id();
	    }
	    //Updating a table
	    public function update($query)
	    {
	    	return $this->exec($query);
	    }
	    //Deleting from a table
	    public function delete($query)
	    {
	    	return $this->exec($query);
	    }
	}
