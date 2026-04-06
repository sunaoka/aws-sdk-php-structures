<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $Duration
 * @property int<0, 2147483647>|null $FadeIn
 * @property int<0, 2147483647>|null $FadeOut
 * @property int<0, 2147483647>|null $Height
 * @property string|null $ImageInserterInput
 * @property int<0, 2147483647>|null $ImageX
 * @property int<0, 2147483647>|null $ImageY
 * @property int<0, 99>|null $Layer
 * @property int<0, 100>|null $Opacity
 * @property string|null $StartTime
 * @property int<0, 2147483647>|null $Width
 */
class InsertableImage extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, 2147483647>|null,
     *     FadeIn?: int<0, 2147483647>|null,
     *     FadeOut?: int<0, 2147483647>|null,
     *     Height?: int<0, 2147483647>|null,
     *     ImageInserterInput?: string|null,
     *     ImageX?: int<0, 2147483647>|null,
     *     ImageY?: int<0, 2147483647>|null,
     *     Layer?: int<0, 99>|null,
     *     Opacity?: int<0, 100>|null,
     *     StartTime?: string|null,
     *     Width?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
