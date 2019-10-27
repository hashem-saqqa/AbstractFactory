<?php

 class DipDegree implements Degree{

    public Title getTitle() {
        return new DipTitle();
    }


    public Content getContent() {
        return new DipContent();
    }


    public Teacher getTeacher() {
        return new DipTeacher();
    }

}



 ?>
