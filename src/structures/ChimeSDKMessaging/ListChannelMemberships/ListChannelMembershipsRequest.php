<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class ListChannelMembershipsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ChimeBearer: string,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
