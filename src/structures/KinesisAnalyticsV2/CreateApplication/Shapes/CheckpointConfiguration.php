<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property bool $CheckpointingEnabled
 * @property int<1, max> $CheckpointInterval
 * @property int<0, max> $MinPauseBetweenCheckpoints
 */
class CheckpointConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     CheckpointingEnabled?: bool,
     *     CheckpointInterval?: int<1, max>,
     *     MinPauseBetweenCheckpoints?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
