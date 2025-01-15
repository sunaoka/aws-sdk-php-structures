<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM'|null $ConfigurationTypeUpdate
 * @property bool|null $CheckpointingEnabledUpdate
 * @property int<1, max>|null $CheckpointIntervalUpdate
 * @property int<0, max>|null $MinPauseBetweenCheckpointsUpdate
 */
class CheckpointConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM'|null,
     *     CheckpointingEnabledUpdate?: bool|null,
     *     CheckpointIntervalUpdate?: int<1, max>|null,
     *     MinPauseBetweenCheckpointsUpdate?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
