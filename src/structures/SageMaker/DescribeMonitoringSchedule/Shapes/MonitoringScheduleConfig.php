<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduleConfig $ScheduleConfig
 * @property MonitoringJobDefinition $MonitoringJobDefinition
 * @property string $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability' $MonitoringType
 */
class MonitoringScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleConfig?: ScheduleConfig,
     *     MonitoringJobDefinition?: MonitoringJobDefinition,
     *     MonitoringJobDefinitionName?: string,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
