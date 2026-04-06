<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServerPeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RouteServerPeerIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeRouteServerPeersRequest extends Request
{
    /**
     * @param array{
     *     RouteServerPeerIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
