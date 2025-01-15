<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $SubmissionDateTime
 * @property \Aws\Api\DateTimeResult|null $CompletionDateTime
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED'|null $State
 * @property string|null $StateChangeReason
 */
class CalculationStatus extends Shape
{
    /**
     * @param array{
     *     SubmissionDateTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionDateTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED'|null,
     *     StateChangeReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
