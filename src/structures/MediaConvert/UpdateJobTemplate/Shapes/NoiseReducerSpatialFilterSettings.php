<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PostFilterSharpenStrength
 * @property int $Speed
 * @property int $Strength
 */
class NoiseReducerSpatialFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpenStrength?: int,
     *     Speed?: int,
     *     Strength?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
