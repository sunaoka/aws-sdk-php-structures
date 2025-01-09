<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\ChannelNameCondition $ChannelNameCondition
 */
class ListSignalingChannelsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChannelNameCondition?: Shapes\ChannelNameCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
