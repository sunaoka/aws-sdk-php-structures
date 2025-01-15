<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduleConfig|null $ScheduleConfig
 * @property MonitoringJobDefinition|null $MonitoringJobDefinition
 * @property string|null $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringType
 */
class MonitoringScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleConfig?: ScheduleConfig|null,
     *     MonitoringJobDefinition?: MonitoringJobDefinition|null,
     *     MonitoringJobDefinitionName?: string|null,
     *     MonitoringType?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
