<?php
class asistencia{
    public $id;
    public $id_curso;
    public $fecha;

    public static function AgregarAsistencia($idCurso){
        $rta = false;
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $fecha = date('Y:m:d');
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO asistencias (id_curso,fecha) VALUES (:id_curso,:fecha)");
        $consulta->bindValue(':id_curso',$idCurso);
        $consulta->bindValue(':fecha',$fecha);
        if($consulta->execute()){
            $rta = true;
        }
        return $rta;
    }
}
?>