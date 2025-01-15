<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CheckpointConfigurationUpdate|null $CheckpointConfigurationUpdate
 * @property MonitoringConfigurationUpdate|null $MonitoringConfigurationUpdate
 * @property ParallelismConfigurationUpdate|null $ParallelismConfigurationUpdate
 */
class FlinkApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     CheckpointConfigurationUpdate?: CheckpointConfigurationUpdate|null,
     *     MonitoringConfigurationUpdate?: MonitoringConfigurationUpdate|null,
     *     ParallelismConfigurationUpdate?: ParallelismConfigurationUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
