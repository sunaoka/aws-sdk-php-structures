<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelMapping|null $ChannelMapping
 * @property int<1, 64>|null $ChannelsIn
 * @property int<1, 64>|null $ChannelsOut
 */
class RemixSettings extends Shape
{
    /**
     * @param array{
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
