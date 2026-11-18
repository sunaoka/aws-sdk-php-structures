<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $PauseRequestTimestamp
 * @property string|null $Reason
 * @property bool $ExecutionTimeoutPaused
 */
class PauseDetails extends Shape
{
    /**
     * @param array{
     *     PauseRequestTimestamp: \Aws\Api\DateTimeResult,
     *     Reason?: string|null,
     *     ExecutionTimeoutPaused: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
