<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamType
 * @property KinesisStreamConfig|null $KinesisStreamConfig
 */
class EndPoint extends Shape
{
    /**
     * @param array{
     *     StreamType: string,
     *     KinesisStreamConfig?: KinesisStreamConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
