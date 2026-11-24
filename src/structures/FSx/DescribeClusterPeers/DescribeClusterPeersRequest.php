<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeClusterPeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ClusterPeerIds
 * @property list<Shapes\ClusterPeerFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeClusterPeersRequest extends Request
{
    /**
     * @param array{
     *     ClusterPeerIds?: list<string>|null,
     *     Filters?: list<Shapes\ClusterPeerFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
