<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3> $PostFilterSharpenStrength
 * @property int<-2, 3> $Speed
 * @property int<0, 16> $Strength
 */
class NoiseReducerSpatialFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpenStrength?: int<0, 3>,
     *     Speed?: int<-2, 3>,
     *     Strength?: int<0, 16>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
