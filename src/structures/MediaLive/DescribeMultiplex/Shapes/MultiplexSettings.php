<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<800, 3000> $MaximumVideoBufferDelayMilliseconds
 * @property int<1000000, 100000000> $TransportStreamBitrate
 * @property int<0, 65535> $TransportStreamId
 * @property int<0, 100000000> $TransportStreamReservedBitrate
 */
class MultiplexSettings extends Shape
{
    /**
     * @param array{
     *     MaximumVideoBufferDelayMilliseconds?: int<800, 3000>,
     *     TransportStreamBitrate: int<1000000, 100000000>,
     *     TransportStreamId: int<0, 65535>,
     *     TransportStreamReservedBitrate?: int<0, 100000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
