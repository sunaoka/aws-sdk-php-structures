<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MonitoringScheduleArn
 * @property string|null $MonitoringScheduleName
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped'|null $MonitoringScheduleStatus
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringType
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property MonitoringScheduleConfig|null $MonitoringScheduleConfig
 * @property string|null $EndpointName
 * @property list<MonitoringAlertSummary>|null $MonitoringAlertSummaries
 * @property MonitoringExecutionSummary|null $LastMonitoringExecutionSummary
 * @property BatchTransformInput|null $BatchTransformInput
 */
class ModelDashboardMonitoringSchedule extends Shape
{
    /**
     * @param array{
     *     MonitoringScheduleArn?: string|null,
     *     MonitoringScheduleName?: string|null,
     *     MonitoringScheduleStatus?: 'Pending'|'Failed'|'Scheduled'|'Stopped'|null,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null,
     *     FailureReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     MonitoringScheduleConfig?: MonitoringScheduleConfig|null,
     *     EndpointName?: string|null,
     *     MonitoringAlertSummaries?: list<MonitoringAlertSummary>|null,
     *     LastMonitoringExecutionSummary?: MonitoringExecutionSummary|null,
     *     BatchTransformInput?: BatchTransformInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
