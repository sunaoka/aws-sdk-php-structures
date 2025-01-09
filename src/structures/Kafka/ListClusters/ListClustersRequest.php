<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterNameFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterNameFilter?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
