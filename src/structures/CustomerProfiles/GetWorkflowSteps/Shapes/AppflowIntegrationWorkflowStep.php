<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowName
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED' $Status
 * @property string $ExecutionMessage
 * @property int $RecordsProcessed
 * @property string $BatchRecordsStartTime
 * @property string $BatchRecordsEndTime
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class AppflowIntegrationWorkflowStep extends Shape
{
    /**
     * @param array{
     *     FlowName: string,
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED',
     *     ExecutionMessage: string,
     *     RecordsProcessed: int,
     *     BatchRecordsStartTime: string,
     *     BatchRecordsEndTime: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
