<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Red
 * @property int<0, max> $Blue
 * @property int<0, max> $Green
 * @property string $HexCode
 * @property string $CSSColor
 * @property string $SimplifiedColor
 * @property float $PixelPercent
 */
class DominantColor extends Shape
{
    /**
     * @param array{
     *     Red?: int<0, max>,
     *     Blue?: int<0, max>,
     *     Green?: int<0, max>,
     *     HexCode?: string,
     *     CSSColor?: string,
     *     SimplifiedColor?: string,
     *     PixelPercent?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
