<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	//add data
	function add($name_td, $details_td, $subject_td, $priority_td, $deadline_td, $status = "Belum"){
        $query = "INSERT INTO tb_to_do".
            "(name_td,details_td,Subject_td,priority_td,deadline_td,status_td) VALUES".
            "('$name_td','$details_td','$subject_td','$priority_td','$deadline_td','$status')";

        return $this->execute($query);
    }

	function delete($id){
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";

		return $this->execute($query);
	}

	function setStatus($id){
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";

		return $this->execute($query);
	}
}
?>