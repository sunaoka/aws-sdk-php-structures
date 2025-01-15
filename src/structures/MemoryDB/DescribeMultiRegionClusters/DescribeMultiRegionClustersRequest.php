<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MultiRegionClusterName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $ShowClusterDetails
 */
class DescribeMultiRegionClustersRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     ShowClusterDetails?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
