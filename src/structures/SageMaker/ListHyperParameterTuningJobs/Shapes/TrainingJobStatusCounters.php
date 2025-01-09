<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHyperParameterTuningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Completed
 * @property int<0, max> $InProgress
 * @property int<0, max> $RetryableError
 * @property int<0, max> $NonRetryableError
 * @property int<0, max> $Stopped
 */
class TrainingJobStatusCounters extends Shape
{
    /**
     * @param array{
     *     Completed?: int<0, max>,
     *     InProgress?: int<0, max>,
     *     RetryableError?: int<0, max>,
     *     NonRetryableError?: int<0, max>,
     *     Stopped?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
