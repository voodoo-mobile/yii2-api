<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 28/10/2016
 * Time: 09:54
 */

namespace vr\api\doc\models;

use yii\base\Model;

/**
 * Class MetaModel
 * @package vr\api\doc\components\models
 */
class MetaModel extends Model
{
    /**
     * @var
     */
    public $timezone;

    /**
     * @var
     */
    public $version;

    /**
     * @var
     */
    public $bundle;

    /**
     * @var
     */
    public $method;

    /**
     * @var
     */
    /** @noinspection SpellCheckingInspection */
    public $udid;

    /**
     * @var
     */
    public $locale;

    /**
     *
     */
    public function init()
    {
        parent::init();

        $this->timezone = (new \DateTime())->getTimezone()->getOffset(new \DateTime()) / 60;
        $this->version  = \Yii::$app->version;
        $this->bundle   = 'com.example.app';
    }
}