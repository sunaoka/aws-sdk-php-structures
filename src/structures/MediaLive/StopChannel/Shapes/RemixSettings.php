<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioChannelMapping> $ChannelMappings
 * @property int|null $ChannelsIn
 * @property int|null $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     ChannelMappings: list<AudioChannelMapping>,
     *     ChannelsIn?: int|null,
     *     ChannelsOut?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
