<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class HelloController extends Controller
{


    public function behaviors()
    {
        return [
            'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'actions' => ['*'],
                    'allow' => true,
                    'roles' => ['admin'],
                ],

            ],
        ],
    ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', ['content' => "Hello, World!"]);
    }


}
