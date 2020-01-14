<?php
namespace frontend\controllers;

use common\models\User;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
/**
 * Site controller
 */
class HelloController extends Controller
{


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', ['content' => "Hello, World!"]);
    }

    public function actionCreate(){
        $user3 = new User([
            'username' => 'Second',
            'auth_key' => 'fghg15695g',
            'email' =>'dd@mail.ru',
            'status' => 10,

        ]);
        $user3->setPassword('123');
        $user3->save();
    }


}
