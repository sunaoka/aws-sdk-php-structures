<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 30> $MaximumRetryAttempts
 */
class RetryStrategy extends Shape
{
    /**
     * @param array{MaximumRetryAttempts: int<1, 30>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
