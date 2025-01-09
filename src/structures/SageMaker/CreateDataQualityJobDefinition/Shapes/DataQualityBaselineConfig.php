<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseliningJobName
 * @property MonitoringConstraintsResource $ConstraintsResource
 * @property MonitoringStatisticsResource $StatisticsResource
 */
class DataQualityBaselineConfig extends Shape
{
    /**
     * @param array{
     *     BaseliningJobName?: string,
     *     ConstraintsResource?: MonitoringConstraintsResource,
     *     StatisticsResource?: MonitoringStatisticsResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
