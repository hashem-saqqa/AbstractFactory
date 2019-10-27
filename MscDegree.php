<?php

 class MscDegree implements Degree{

    public Title getTitle() {
        return new MscTitle();
    }


    public Content getContent() {
        return new MscContent();
    }


    public Teacher getTeacher() {
        return new MscTeacher();
    }

}



 ?>
