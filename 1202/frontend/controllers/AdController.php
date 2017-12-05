<?php
namespace frontend\controllers;

use Yii;
use yii\db\Connection;
use yii\web\Controller;

class AdController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex(){
		return $this->render('demo');
	}
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionAdd_do(){
		var_dump($_POST);exit;
		$filed_name = $_POST['filed_name'];
		$defult_val = $_POST['defult_val'];
		$filed_type = $_POST['filed_type'];
		$filed_check = empty($_POST['filed_check'])? '' : explode($_POST['filed_check'],',');
		$ismust = $_POST['filed_type'];
		$filed_rule = $_POST['filed_rule']; 
	}
}