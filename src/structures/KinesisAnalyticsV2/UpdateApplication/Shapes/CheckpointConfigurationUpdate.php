<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationTypeUpdate
 * @property bool $CheckpointingEnabledUpdate
 * @property int $CheckpointIntervalUpdate
 * @property int $MinPauseBetweenCheckpointsUpdate
 */
class CheckpointConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM',
     *     CheckpointingEnabledUpdate?: bool,
     *     CheckpointIntervalUpdate?: int,
     *     MinPauseBetweenCheckpointsUpdate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
