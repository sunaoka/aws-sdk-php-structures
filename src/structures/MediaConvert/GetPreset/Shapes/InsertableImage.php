<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $Duration
 * @property int<0, 2147483647> $FadeIn
 * @property int<0, 2147483647> $FadeOut
 * @property int<0, 2147483647> $Height
 * @property string $ImageInserterInput
 * @property int<0, 2147483647> $ImageX
 * @property int<0, 2147483647> $ImageY
 * @property int<0, 99> $Layer
 * @property int<0, 100> $Opacity
 * @property string $StartTime
 * @property int<0, 2147483647> $Width
 */
class InsertableImage extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, 2147483647>,
     *     FadeIn?: int<0, 2147483647>,
     *     FadeOut?: int<0, 2147483647>,
     *     Height?: int<0, 2147483647>,
     *     ImageInserterInput?: string,
     *     ImageX?: int<0, 2147483647>,
     *     ImageY?: int<0, 2147483647>,
     *     Layer?: int<0, 99>,
     *     Opacity?: int<0, 100>,
     *     StartTime?: string,
     *     Width?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
