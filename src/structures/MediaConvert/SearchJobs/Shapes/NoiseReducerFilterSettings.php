<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Strength
 */
class NoiseReducerFilterSettings extends Shape
{
    /**
     * @param array{Strength?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
