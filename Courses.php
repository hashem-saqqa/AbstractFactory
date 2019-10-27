<?php
 class Course {
    private  $aTitle;
    private  $aContent;
    private  $aTeacher;
    private  $aDegree;
    private static   $aCourse;

    private __Course() {
    }

    public static Course getaCourse() {
        if($aCourse == null)
             self::$aCourse = new self();
        return $aCourse;
    }
    // public static function getSingleton() {
    //     if(!isset(self::$aCourse))
    //         self::$aCourse = new self();
    //     return self::$aCourse;
    // }
    public function setaDegree($aDegree) {
        $this->aDegree = $aDegree;
    }
    public function view($tData, $cData, $hData){
        $this->aTitle = $this->aDegree->getTitle();
        $this->aContent = $this->aDegree->getContent();
        $this->aTeacher = $this->aDegree->getTeacher();

        $this->aTitle->view($tData);
        $this->aContent->view($cData);
        $this->aTeacher->view($hData);
    }

}
 ?>
