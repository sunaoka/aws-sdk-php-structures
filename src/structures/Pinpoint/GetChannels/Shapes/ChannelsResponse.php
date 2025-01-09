<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ChannelResponse> $Channels
 */
class ChannelsResponse extends Shape
{
    /**
     * @param array{Channels: array<string, ChannelResponse>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
