<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelModerators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ChimeBearer
 */
class ListChannelModeratorsRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
