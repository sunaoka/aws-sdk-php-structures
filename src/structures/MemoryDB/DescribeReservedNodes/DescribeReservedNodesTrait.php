<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodes;

trait DescribeReservedNodesTrait
{
    /**
     * @param DescribeReservedNodesRequest $args
     * @return DescribeReservedNodesResponse
     */
    public function describeReservedNodes(DescribeReservedNodesRequest $args)
    {
        $result = parent::describeReservedNodes($args->toArray());
        return new DescribeReservedNodesResponse($result->toArray());
    }
}
