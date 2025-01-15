<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfiguration|null $CheckpointConfiguration
 * @property MonitoringConfiguration|null $MonitoringConfiguration
 * @property ParallelismConfiguration|null $ParallelismConfiguration
 */
class FlinkApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     CheckpointConfiguration?: CheckpointConfiguration|null,
     *     MonitoringConfiguration?: MonitoringConfiguration|null,
     *     ParallelismConfiguration?: ParallelismConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
