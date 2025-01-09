<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxAttempts
 * @property int $maxFailedAttemptsPerHour
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     maxAttempts?: int,
     *     maxFailedAttemptsPerHour?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
