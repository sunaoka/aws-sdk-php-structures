<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $SubmissionDateTime
 * @property \Aws\Api\DateTimeResult $CompletionDateTime
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED' $State
 * @property string $StateChangeReason
 */
class CalculationStatus extends Shape
{
    /**
     * @param array{
     *     SubmissionDateTime?: \Aws\Api\DateTimeResult,
     *     CompletionDateTime?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED',
     *     StateChangeReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
