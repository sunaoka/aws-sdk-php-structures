<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64>|null $AudioDescriptionAudioChannel
 * @property int<1, 64>|null $AudioDescriptionDataChannel
 * @property ChannelMapping|null $ChannelMapping
 * @property int<1, 64>|null $ChannelsIn
 * @property int<1, 64>|null $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionAudioChannel?: int<1, 64>|null,
     *     AudioDescriptionDataChannel?: int<1, 64>|null,
     *     ChannelMapping?: ChannelMapping|null,
     *     ChannelsIn?: int<1, 64>|null,
     *     ChannelsOut?: int<1, 64>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
