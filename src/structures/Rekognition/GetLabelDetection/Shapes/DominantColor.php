<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Red
 * @property int $Blue
 * @property int $Green
 * @property string $HexCode
 * @property string $CSSColor
 * @property string $SimplifiedColor
 * @property float $PixelPercent
 */
class DominantColor extends Shape
{
    /**
     * @param array{
     *     Red?: int,
     *     Blue?: int,
     *     Green?: int,
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
