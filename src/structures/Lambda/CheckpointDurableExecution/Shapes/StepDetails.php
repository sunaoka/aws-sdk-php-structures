<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Attempt
 * @property \Aws\Api\DateTimeResult|null $NextAttemptTimestamp
 * @property string|null $Result
 * @property ErrorObject|null $Error
 */
class StepDetails extends Shape
{
    /**
     * @param array{
     *     Attempt?: int<0, max>|null,
     *     NextAttemptTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Result?: string|null,
     *     Error?: ErrorObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
