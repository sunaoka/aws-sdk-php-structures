<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringScheduleName
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped' $MonitoringExecutionStatus
 * @property string|null $ProcessingJobArn
 * @property string|null $EndpointName
 * @property string|null $FailureReason
 * @property string|null $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringType
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
     *     ProcessingJobArn?: string|null,
     *     EndpointName?: string|null,
     *     FailureReason?: string|null,
     *     MonitoringJobDefinitionName?: string|null,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
