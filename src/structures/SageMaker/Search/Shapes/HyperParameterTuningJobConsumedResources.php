<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RuntimeInSeconds
 */
class HyperParameterTuningJobConsumedResources extends Shape
{
    /**
     * @param array{RuntimeInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
