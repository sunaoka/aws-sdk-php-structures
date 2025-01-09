<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListSubChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChimeBearer
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSubChannelsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChimeBearer: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
