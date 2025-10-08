<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodes;

trait DescribeReservedCacheNodesTrait
{
    /**
     * @param DescribeReservedCacheNodesRequest $args
     * @return DescribeReservedCacheNodesResponse
     */
    public function describeReservedCacheNodes(DescribeReservedCacheNodesRequest $args)
    {
        $result = parent::describeReservedCacheNodes($args->toArray());
        return new DescribeReservedCacheNodesResponse($result->toArray());
    }
}
