<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED' $State
 * @property string $StateChangeReason
 * @property \Aws\Api\DateTimeResult $SubmissionDateTime
 * @property \Aws\Api\DateTimeResult $CompletionDateTime
 * @property AthenaError $AthenaError
 */
class QueryExecutionStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED',
     *     StateChangeReason?: string,
     *     SubmissionDateTime?: \Aws\Api\DateTimeResult,
     *     CompletionDateTime?: \Aws\Api\DateTimeResult,
     *     AthenaError?: AthenaError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
