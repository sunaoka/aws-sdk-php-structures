<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property bool|null $CheckpointingEnabled
 * @property int<1, max>|null $CheckpointInterval
 * @property int<0, max>|null $MinPauseBetweenCheckpoints
 */
class CheckpointConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     CheckpointingEnabled?: bool|null,
     *     CheckpointInterval?: int<1, max>|null,
     *     MinPauseBetweenCheckpoints?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
