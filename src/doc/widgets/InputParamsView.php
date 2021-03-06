<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27/10/2016
 * Time: 20:34
 */

namespace vr\api\doc\widgets;

use yii\base\Widget;
use yii\helpers\Json;

/**
 * Class InputParamsView
 * @package vr\api\doc\widgets
 */
class InputParamsView extends Widget
{
    /**
     * @var
     */
    public $params;

    /**
     *
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        if (!$this->params) {
            $this->params = [];
        }

        $extra = [];

        return Json::encode($extra + $this->params, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}