<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ResumeRequestTimestamp
 * @property EventResumeReason|null $Reason
 */
class ExecutionResumedDetails extends Shape
{
    /**
     * @param array{
     *     ResumeRequestTimestamp: \Aws\Api\DateTimeResult,
     *     Reason?: EventResumeReason|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
