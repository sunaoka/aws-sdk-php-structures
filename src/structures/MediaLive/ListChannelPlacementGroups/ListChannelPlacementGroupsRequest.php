<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannelPlacementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListChannelPlacementGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
