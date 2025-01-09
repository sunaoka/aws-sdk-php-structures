<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxAttempts
 * @property int<1, max> $maxFailedAttemptsPerHour
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     maxAttempts?: int<1, max>,
     *     maxFailedAttemptsPerHour?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
