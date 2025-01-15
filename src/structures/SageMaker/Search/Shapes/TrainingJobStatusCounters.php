<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Completed
 * @property int<0, max>|null $InProgress
 * @property int<0, max>|null $RetryableError
 * @property int<0, max>|null $NonRetryableError
 * @property int<0, max>|null $Stopped
 */
class TrainingJobStatusCounters extends Shape
{
    /**
     * @param array{
     *     Completed?: int<0, max>|null,
     *     InProgress?: int<0, max>|null,
     *     RetryableError?: int<0, max>|null,
     *     NonRetryableError?: int<0, max>|null,
     *     Stopped?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
