<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ChannelNameCondition|null $ChannelNameCondition
 */
class ListSignalingChannelsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10000>|null,
     *     NextToken?: string|null,
     *     ChannelNameCondition?: Shapes\ChannelNameCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
