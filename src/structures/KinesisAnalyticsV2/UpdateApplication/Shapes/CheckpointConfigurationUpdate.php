<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationTypeUpdate
 * @property bool $CheckpointingEnabledUpdate
 * @property int<1, max> $CheckpointIntervalUpdate
 * @property int<0, max> $MinPauseBetweenCheckpointsUpdate
 */
class CheckpointConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM',
     *     CheckpointingEnabledUpdate?: bool,
     *     CheckpointIntervalUpdate?: int<1, max>,
     *     MinPauseBetweenCheckpointsUpdate?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
