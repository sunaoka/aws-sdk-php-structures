<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterNameFilter
 * @property string $ClusterTypeFilter
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListClustersV2Request extends Request
{
    /**
     * @param array{
     *     ClusterNameFilter?: string,
     *     ClusterTypeFilter?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
