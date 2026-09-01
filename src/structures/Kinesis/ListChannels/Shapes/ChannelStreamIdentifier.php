<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 */
class ChannelStreamIdentifier extends Shape
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamCreationTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
