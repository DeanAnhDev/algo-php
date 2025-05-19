<?php
require_once 'app/Question.php';
require_once 'app/QuestionsList.php';
include 'app/autoload.php';

$question = new app\Question("so n","toán lớp 1", "1+1=?","2");
$itemQuestionList = new app\QuestionsList();
$itemQuestionList->push($question);
echo '<pre>' , print_r($itemQuestionList->parse('question.md')->all()) , '</pre>';