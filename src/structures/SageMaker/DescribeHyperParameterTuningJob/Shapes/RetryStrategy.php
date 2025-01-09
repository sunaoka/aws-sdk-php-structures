<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumRetryAttempts
 */
class RetryStrategy extends Shape
{
    /**
     * @param array{MaximumRetryAttempts: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
