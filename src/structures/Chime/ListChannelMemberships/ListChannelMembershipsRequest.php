<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelMembershipsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
