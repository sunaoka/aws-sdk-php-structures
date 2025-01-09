<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelMembershipsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
