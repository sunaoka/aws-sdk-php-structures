<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64> $AudioDescriptionAudioChannel
 * @property int<1, 64> $AudioDescriptionDataChannel
 * @property ChannelMapping $ChannelMapping
 * @property int<1, 64> $ChannelsIn
 * @property int<1, 64> $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionAudioChannel?: int<1, 64>,
     *     AudioDescriptionDataChannel?: int<1, 64>,
     *     ChannelMapping?: ChannelMapping,
     *     ChannelsIn?: int<1, 64>,
     *     ChannelsOut?: int<1, 64>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
