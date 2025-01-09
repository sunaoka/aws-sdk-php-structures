<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListOriginEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ChannelId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
