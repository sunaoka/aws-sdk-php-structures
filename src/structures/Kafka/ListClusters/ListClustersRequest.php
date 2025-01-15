<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterNameFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterNameFilter?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
