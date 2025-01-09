<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfiguration $CheckpointConfiguration
 * @property MonitoringConfiguration $MonitoringConfiguration
 * @property ParallelismConfiguration $ParallelismConfiguration
 */
class FlinkApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     CheckpointConfiguration?: CheckpointConfiguration,
     *     MonitoringConfiguration?: MonitoringConfiguration,
     *     ParallelismConfiguration?: ParallelismConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
