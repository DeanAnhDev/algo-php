<?php
namespace app;
require_once "./app/Collection.php";

class QuestionsList extends Colection {
    public  function parse($path)
    {
        $contents = file_get_contents($path);
        $arrayQuestions = explode("######",$contents);
        array_shift($arrayQuestions);
        foreach ($arrayQuestions as $questions)
        {
            [$question,$answer]  = explode("####",$questions);
            [$titles,$content]   = explode('?',$question);
            [$number,$title]     = explode('.',$titles);
            $this->listsQuestion[] = new Question($number,$title,$content,$answer);
        }
        return $this;
    }
}

