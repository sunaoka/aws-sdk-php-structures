<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterName
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $ShowClusterDetails
 */
class DescribeMultiRegionClustersRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterName?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ShowClusterDetails?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
