<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChannelId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOriginEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ChannelId?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
