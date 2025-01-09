<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioChannelMapping> $ChannelMappings
 * @property int $ChannelsIn
 * @property int $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     ChannelMappings: list<AudioChannelMapping>,
     *     ChannelsIn?: int,
     *     ChannelsOut?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
