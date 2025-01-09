<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioChannelMapping> $ChannelMappings
 * @property int<1, 16> $ChannelsIn
 * @property int<1, 8> $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     ChannelMappings: list<AudioChannelMapping>,
     *     ChannelsIn?: int<1, 16>,
     *     ChannelsOut?: int<1, 8>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
