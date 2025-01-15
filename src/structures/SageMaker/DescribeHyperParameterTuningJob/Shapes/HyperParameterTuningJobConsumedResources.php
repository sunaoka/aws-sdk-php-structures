<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RuntimeInSeconds
 */
class HyperParameterTuningJobConsumedResources extends Shape
{
    /**
     * @param array{RuntimeInSeconds?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
