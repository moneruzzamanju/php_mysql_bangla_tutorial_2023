<?php
    class Students extends Dbconnection{
        public  $id;
        public  $student_id;
        public  $name;
        public  $father_name;
        public  $mother_name;
        public  $email;
        public  $phone;
        public  $address;
        public  $status;

        public function __construct(){
            parent::__construct();
        }
public function getStudents(){
       	$sql = "SELECT * FROM students";
        	$query = $this->db->query($sql);
        	$data = $query->fetchAll(PDO::FETCH_ASSOC);
        	return $data;
    }
    public function getStudentById($id){
        $sql = "SELECT * FROM students WHERE id='$id'";
         $query = $this->db->query($sql);
         $data = $query->fetch(PDO::FETCH_ASSOC);
         return $data ? $data : [];
    }

    public function save(){
        $sql = "INSERT INTO students(student_id, name, father_name, mother_name, email, phone, address) VALUE('".$this->student_id."','".$this->name."','".$this->father_name."','".$this->mother_name."','".$this->email."','".$this->phone."','".$this->address."')";

        $save = $this->db->exec($sql);
        return $save ? true : false;
    }

    public function delete($id){
        $sql = "DELETE FROM students WHERE id='".$id."'";
        $status = $this->db->exec($sql);
        return $status ? true : false;
    }
    public function update(){
        $sql = "UPDATE students SET student_id='".$this->student_id."',name='".$this->name."',father_name='".$this->father_name."',mother_name='".$this->mother_name."',email='".$this->email."',phone='".$this->phone."',address='".$this->address."' WHERE id='".$this->id."'";
        $save = $this->db->exec($sql);
        return $save ? true : false;
    }

    


}
?>