<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPoolAllocations;

trait DescribeIpamPoolAllocationsTrait
{
    /**
     * @param DescribeIpamPoolAllocationsRequest $args
     * @return DescribeIpamPoolAllocationsResponse
     */
    public function describeIpamPoolAllocations(DescribeIpamPoolAllocationsRequest $args)
    {
        $result = parent::describeIpamPoolAllocations($args->toArray());
        return new DescribeIpamPoolAllocationsResponse($result->toArray());
    }
}
