<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3>|null $PostFilterSharpenStrength
 * @property int<-2, 3>|null $Speed
 * @property int<0, 16>|null $Strength
 */
class NoiseReducerSpatialFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpenStrength?: int<0, 3>|null,
     *     Speed?: int<-2, 3>|null,
     *     Strength?: int<0, 16>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
