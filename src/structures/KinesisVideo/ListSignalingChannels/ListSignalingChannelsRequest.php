<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000> $MaxResults
 * @property string $NextToken
 * @property Shapes\ChannelNameCondition $ChannelNameCondition
 */
class ListSignalingChannelsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10000>,
     *     NextToken?: string,
     *     ChannelNameCondition?: Shapes\ChannelNameCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
