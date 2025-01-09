<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfigurationDescription $CheckpointConfigurationDescription
 * @property MonitoringConfigurationDescription $MonitoringConfigurationDescription
 * @property ParallelismConfigurationDescription $ParallelismConfigurationDescription
 * @property string $JobPlanDescription
 */
class FlinkApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     CheckpointConfigurationDescription?: CheckpointConfigurationDescription,
     *     MonitoringConfigurationDescription?: MonitoringConfigurationDescription,
     *     ParallelismConfigurationDescription?: ParallelismConfigurationDescription,
     *     JobPlanDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
