<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OperationId
 * @property 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT'|null $Action
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property string|null $StatusReason
 * @property StackSetOperationStatusDetails|null $StatusDetails
 * @property StackSetOperationPreferences|null $OperationPreferences
 */
class StackSetOperationSummary extends Shape
{
    /**
     * @param array{
     *     OperationId?: string|null,
     *     Action?: 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT'|null,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED'|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StatusReason?: string|null,
     *     StatusDetails?: StackSetOperationStatusDetails|null,
     *     OperationPreferences?: StackSetOperationPreferences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
