<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationId
 * @property 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT' $Action
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property string $StatusReason
 * @property StackSetOperationStatusDetails $StatusDetails
 * @property StackSetOperationPreferences $OperationPreferences
 */
class StackSetOperationSummary extends Shape
{
    /**
     * @param array{
     *     OperationId?: string,
     *     Action?: 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT',
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED',
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult,
     *     StatusReason?: string,
     *     StatusDetails?: StackSetOperationStatusDetails,
     *     OperationPreferences?: StackSetOperationPreferences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
