<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioChannelMapping> $ChannelMappings
 * @property int<1, 16>|null $ChannelsIn
 * @property int<1, 8>|null $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     ChannelMappings: list<AudioChannelMapping>,
     *     ChannelsIn?: int<1, 16>|null,
     *     ChannelsOut?: int<1, 8>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
