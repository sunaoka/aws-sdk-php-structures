<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3>|null $Strength
 */
class NoiseReducerFilterSettings extends Shape
{
    /**
     * @param array{Strength?: int<0, 3>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
