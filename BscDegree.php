<?php

 class BscDegree implements Degree{

    public Title getTitle() {
        return new BscTitle();
    }


    public Content getContent() {
        return new BscContent();
    }


    public Teacher getTeacher() {
        return new BscTeacher();
    }

}



 ?>
