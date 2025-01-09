<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3> $Strength
 */
class NoiseReducerFilterSettings extends Shape
{
    /**
     * @param array{Strength?: int<0, 3>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
