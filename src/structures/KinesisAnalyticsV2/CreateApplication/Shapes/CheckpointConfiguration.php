<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property bool $CheckpointingEnabled
 * @property int $CheckpointInterval
 * @property int $MinPauseBetweenCheckpoints
 */
class CheckpointConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     CheckpointingEnabled?: bool,
     *     CheckpointInterval?: int,
     *     MinPauseBetweenCheckpoints?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
