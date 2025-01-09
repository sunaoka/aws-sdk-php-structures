<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumVideoBufferDelayMilliseconds
 * @property int $TransportStreamBitrate
 * @property int $TransportStreamId
 * @property int $TransportStreamReservedBitrate
 */
class MultiplexSettings extends Shape
{
    /**
     * @param array{
     *     MaximumVideoBufferDelayMilliseconds?: int,
     *     TransportStreamBitrate: int,
     *     TransportStreamId: int,
     *     TransportStreamReservedBitrate?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
