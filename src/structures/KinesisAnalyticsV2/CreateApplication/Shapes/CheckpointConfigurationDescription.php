<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM'|null $ConfigurationType
 * @property bool|null $CheckpointingEnabled
 * @property int<1, max>|null $CheckpointInterval
 * @property int<0, max>|null $MinPauseBetweenCheckpoints
 */
class CheckpointConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'DEFAULT'|'CUSTOM'|null,
     *     CheckpointingEnabled?: bool|null,
     *     CheckpointInterval?: int<1, max>|null,
     *     MinPauseBetweenCheckpoints?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
