<?php

namespace ereminmdev\yii2\canvas_confetti;

use yii\web\AssetBundle;

class CanvasConfettiAsset extends AssetBundle
{
    public $sourcePath = '@npm/canvas-confetti/dist';

    public $js = [
        'confetti.browser.js',
    ];
}
