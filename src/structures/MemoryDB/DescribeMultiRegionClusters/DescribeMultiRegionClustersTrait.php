<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionClusters;

trait DescribeMultiRegionClustersTrait
{
    /**
     * @param DescribeMultiRegionClustersRequest $args
     * @return DescribeMultiRegionClustersResponse
     */
    public function describeMultiRegionClusters(DescribeMultiRegionClustersRequest $args)
    {
        $result = parent::describeMultiRegionClusters($args->toArray());
        return new DescribeMultiRegionClustersResponse($result->toArray());
    }
}
