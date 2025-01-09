<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListOriginEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
