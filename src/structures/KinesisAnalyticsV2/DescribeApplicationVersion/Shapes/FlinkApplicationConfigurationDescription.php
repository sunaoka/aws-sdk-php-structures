<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfigurationDescription|null $CheckpointConfigurationDescription
 * @property MonitoringConfigurationDescription|null $MonitoringConfigurationDescription
 * @property ParallelismConfigurationDescription|null $ParallelismConfigurationDescription
 * @property string|null $JobPlanDescription
 */
class FlinkApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     CheckpointConfigurationDescription?: CheckpointConfigurationDescription|null,
     *     MonitoringConfigurationDescription?: MonitoringConfigurationDescription|null,
     *     ParallelismConfigurationDescription?: ParallelismConfigurationDescription|null,
     *     JobPlanDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
