<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfigurationUpdate $CheckpointConfigurationUpdate
 * @property MonitoringConfigurationUpdate $MonitoringConfigurationUpdate
 * @property ParallelismConfigurationUpdate $ParallelismConfigurationUpdate
 */
class FlinkApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     CheckpointConfigurationUpdate?: CheckpointConfigurationUpdate,
     *     MonitoringConfigurationUpdate?: MonitoringConfigurationUpdate,
     *     ParallelismConfigurationUpdate?: ParallelismConfigurationUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
