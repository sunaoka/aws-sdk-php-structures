<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringScheduleName
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped' $MonitoringExecutionStatus
 * @property string $ProcessingJobArn
 * @property string $EndpointName
 * @property string $FailureReason
 * @property string $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability' $MonitoringType
 */
class MonitoringExecutionSummary extends Shape
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     ScheduledTime: \Aws\Api\DateTimeResult,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     MonitoringExecutionStatus: 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped',
     *     ProcessingJobArn?: string,
     *     EndpointName?: string,
     *     FailureReason?: string,
     *     MonitoringJobDefinitionName?: string,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
