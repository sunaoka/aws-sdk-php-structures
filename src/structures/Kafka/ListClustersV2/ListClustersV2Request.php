<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterNameFilter
 * @property string|null $ClusterTypeFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClustersV2Request extends Request
{
    /**
     * @param array{
     *     ClusterNameFilter?: string|null,
     *     ClusterTypeFilter?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
