<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Red
 * @property int<0, max>|null $Blue
 * @property int<0, max>|null $Green
 * @property string|null $HexCode
 * @property string|null $CSSColor
 * @property string|null $SimplifiedColor
 * @property float|null $PixelPercent
 */
class DominantColor extends Shape
{
    /**
     * @param array{
     *     Red?: int<0, max>|null,
     *     Blue?: int<0, max>|null,
     *     Green?: int<0, max>|null,
     *     HexCode?: string|null,
     *     CSSColor?: string|null,
     *     SimplifiedColor?: string|null,
     *     PixelPercent?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
