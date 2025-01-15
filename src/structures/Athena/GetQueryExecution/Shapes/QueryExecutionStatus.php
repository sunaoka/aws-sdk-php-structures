<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null $State
 * @property string|null $StateChangeReason
 * @property \Aws\Api\DateTimeResult|null $SubmissionDateTime
 * @property \Aws\Api\DateTimeResult|null $CompletionDateTime
 * @property AthenaError|null $AthenaError
 */
class QueryExecutionStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null,
     *     StateChangeReason?: string|null,
     *     SubmissionDateTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionDateTime?: \Aws\Api\DateTimeResult|null,
     *     AthenaError?: AthenaError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
