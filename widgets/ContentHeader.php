<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-admin-lte
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-AdminLTE
 * @version 1.3.5
 */

namespace cinghie\adminlte\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

class ContentHeader extends Widget
{
    public $breadcrumbs;
    public $title;
    public $subtitle;

    public function init()
    {
        if ($this->title === null) {
            $this->title = 'Dashboard';
        }

        if ($this->subtitle === null) {
            $this->subtitle = '<small>Version 2.0</small>';
        } elseif ($this->subtitle != '') {
            $this->subtitle = '<small>'.Html::encode($this->subtitle).'</small>';
        }

        if ($this->breadcrumbs === null) {
            $this->breadcrumbs = '<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>';
        } else {
            $this->breadcrumbs = Breadcrumbs::widget([
                'links' => isset($this->breadcrumbs) ? $this->breadcrumbs : [],
            ]);
        }
    }

    public function run()
    {
        $html = '<section class="content-header">
                    <h1>'.Html::encode($this->title).$this->subtitle.'</h1>'.$this->breadcrumbs.
                '</section>';

        return $html;
    }

}
