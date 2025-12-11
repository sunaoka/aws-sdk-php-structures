<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CurrentAttempt
 * @property int<0, max>|null $NextAttemptDelaySeconds
 */
class RetryDetails extends Shape
{
    /**
     * @param array{
     *     CurrentAttempt?: int<0, max>|null,
     *     NextAttemptDelaySeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
