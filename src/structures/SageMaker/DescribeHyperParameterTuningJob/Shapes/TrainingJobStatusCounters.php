<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Completed
 * @property int $InProgress
 * @property int $RetryableError
 * @property int $NonRetryableError
 * @property int $Stopped
 */
class TrainingJobStatusCounters extends Shape
{
    /**
     * @param array{
     *     Completed?: int,
     *     InProgress?: int,
     *     RetryableError?: int,
     *     NonRetryableError?: int,
     *     Stopped?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
