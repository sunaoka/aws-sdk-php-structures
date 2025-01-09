<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AudioDescriptionAudioChannel
 * @property int $AudioDescriptionDataChannel
 * @property ChannelMapping $ChannelMapping
 * @property int $ChannelsIn
 * @property int $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionAudioChannel?: int,
     *     AudioDescriptionDataChannel?: int,
     *     ChannelMapping?: ChannelMapping,
     *     ChannelsIn?: int,
     *     ChannelsOut?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
