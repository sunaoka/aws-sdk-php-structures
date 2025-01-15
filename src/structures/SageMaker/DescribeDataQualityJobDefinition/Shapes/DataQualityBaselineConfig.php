<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaseliningJobName
 * @property MonitoringConstraintsResource|null $ConstraintsResource
 * @property MonitoringStatisticsResource|null $StatisticsResource
 */
class DataQualityBaselineConfig extends Shape
{
    /**
     * @param array{
     *     BaseliningJobName?: string|null,
     *     ConstraintsResource?: MonitoringConstraintsResource|null,
     *     StatisticsResource?: MonitoringStatisticsResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
