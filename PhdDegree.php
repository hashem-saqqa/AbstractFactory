<?php

 class PhdDegree implements Degree{

    public Title getTitle() {
        return new PhdTitle();
    }


    public Content getContent() {
        return new PhdContent();
    }


    public Teacher getTeacher() {
        return new PhdTeacher();
    }

}



 ?>
