<?php
    class Estudiante_model extends CI_Model{
        public function listaestudiantes()
        {
            $this->db->select('*');
            $this->db->from('estudiantes');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }
        public function listaestudiantesdes()
        {
            $this->db->select('*');
            $this->db->from('estudiantes');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }
        public function agregarestudiante($data)
        {
            $this->db->insert('estudiantes',$data);
        }
        public function elimarestudiante($idestudiante)
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->delete('estudiantes');
        }
        public function recuperarestudiante($idestudiante)
        {
            $this->db->select('*');
            $this->db->from('estudiantes');
            $this->db->where('idEstudiante',$idestudiante);
            return $this->db->get();
        }
        public function modificarestudiante($idestudiante,$data)
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->update('estudiantes',$data);            
        }
    }