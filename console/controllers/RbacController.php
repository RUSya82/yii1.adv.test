<?php


namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\User;

class RbacController extends Controller
{
    public function actionInit(){
        $auth = Yii::$app->authManager;

        //php yii rbac/init Создадим роли админа и редактора новостей
//        $admin = $auth->createRole('admin');
//        $user = $auth->createRole('user');
        $admin = $auth->getRole('admin');
        $user = $auth->getRole('user');

//        $auth->add($admin);
//        $auth->add($user);

        $auth->assign($admin, 1);
        $auth->assign($user, 3);
        $auth->assign($user, 2);
        $permission = $auth->createPermission('canSeeAdminPage');
        $auth->add($permission);
        $auth->addChild($admin, $permission);


    }
}