<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 * @property string $SubChannelId
 */
class ListChannelMembershipsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
