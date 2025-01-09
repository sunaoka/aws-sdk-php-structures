<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListSubChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChimeBearer
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListSubChannelsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
