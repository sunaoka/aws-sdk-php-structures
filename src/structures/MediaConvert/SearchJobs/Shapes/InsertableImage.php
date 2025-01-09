<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property int $FadeIn
 * @property int $FadeOut
 * @property int $Height
 * @property string $ImageInserterInput
 * @property int $ImageX
 * @property int $ImageY
 * @property int $Layer
 * @property int $Opacity
 * @property string $StartTime
 * @property int $Width
 */
class InsertableImage extends Shape
{
    /**
     * @param array{
     *     Duration?: int,
     *     FadeIn?: int,
     *     FadeOut?: int,
     *     Height?: int,
     *     ImageInserterInput?: string,
     *     ImageX?: int,
     *     ImageY?: int,
     *     Layer?: int,
     *     Opacity?: int,
     *     StartTime?: string,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
