<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/7/1
 * Time: 下午12:00
 */

namespace plugins\code;


class NavListener
{
    public static function handle($event)
    {
        //加到左边导航上
        $event->sender->params['leftMenuItems'][] = [
            'label' => '下载',
            'url' => ['/code'],
            'active' => \Yii::$app->controller->getRoute() == 'code/default/index'
        ];
    }
}