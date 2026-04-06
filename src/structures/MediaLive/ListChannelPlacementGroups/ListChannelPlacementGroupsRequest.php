<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannelPlacementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListChannelPlacementGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
