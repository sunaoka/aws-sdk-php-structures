<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Seed
 */
class ShuffleConfig extends Shape
{
    /**
     * @param array{Seed: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
