<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $PauseRequestTimestamp
 * @property EventPauseReason|null $Reason
 * @property bool $ExecutionTimeoutPaused
 */
class ExecutionPausedDetails extends Shape
{
    /**
     * @param array{
     *     PauseRequestTimestamp: \Aws\Api\DateTimeResult,
     *     Reason?: EventPauseReason|null,
     *     ExecutionTimeoutPaused: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
