<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringScheduleName
 * @property string $MonitoringScheduleArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped' $MonitoringScheduleStatus
 * @property string|null $EndpointName
 * @property string|null $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringType
 */
class MonitoringScheduleSummary extends Shape
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringScheduleArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     MonitoringScheduleStatus: 'Pending'|'Failed'|'Scheduled'|'Stopped',
     *     EndpointName?: string|null,
     *     MonitoringJobDefinitionName?: string|null,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
