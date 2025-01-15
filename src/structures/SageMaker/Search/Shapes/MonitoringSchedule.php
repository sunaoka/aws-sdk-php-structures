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
 * @property MonitoringExecutionSummary|null $LastMonitoringExecutionSummary
 * @property list<Tag>|null $Tags
 */
class MonitoringSchedule extends Shape
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
     *     LastMonitoringExecutionSummary?: MonitoringExecutionSummary|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
