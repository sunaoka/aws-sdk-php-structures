<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOriginEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
