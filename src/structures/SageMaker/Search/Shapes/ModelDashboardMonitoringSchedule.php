<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringScheduleArn
 * @property string $MonitoringScheduleName
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped' $MonitoringScheduleStatus
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability' $MonitoringType
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property MonitoringScheduleConfig $MonitoringScheduleConfig
 * @property string $EndpointName
 * @property list<MonitoringAlertSummary> $MonitoringAlertSummaries
 * @property MonitoringExecutionSummary $LastMonitoringExecutionSummary
 * @property BatchTransformInput $BatchTransformInput
 */
class ModelDashboardMonitoringSchedule extends Shape
{
    /**
     * @param array{
     *     MonitoringScheduleArn?: string,
     *     MonitoringScheduleName?: string,
     *     MonitoringScheduleStatus?: 'Pending'|'Failed'|'Scheduled'|'Stopped',
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability',
     *     FailureReason?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     MonitoringScheduleConfig?: MonitoringScheduleConfig,
     *     EndpointName?: string,
     *     MonitoringAlertSummaries?: list<MonitoringAlertSummary>,
     *     LastMonitoringExecutionSummary?: MonitoringExecutionSummary,
     *     BatchTransformInput?: BatchTransformInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
