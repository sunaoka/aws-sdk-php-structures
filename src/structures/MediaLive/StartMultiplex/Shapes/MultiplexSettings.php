<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaximumVideoBufferDelayMilliseconds
 * @property int $TransportStreamBitrate
 * @property int $TransportStreamId
 * @property int|null $TransportStreamReservedBitrate
 */
class MultiplexSettings extends Shape
{
    /**
     * @param array{
     *     MaximumVideoBufferDelayMilliseconds?: int|null,
     *     TransportStreamBitrate: int,
     *     TransportStreamId: int,
     *     TransportStreamReservedBitrate?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
