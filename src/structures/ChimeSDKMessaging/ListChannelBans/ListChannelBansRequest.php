<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelBans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelBansRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
