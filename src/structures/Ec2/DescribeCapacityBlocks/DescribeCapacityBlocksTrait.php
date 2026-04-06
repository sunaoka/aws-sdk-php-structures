<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlocks;

trait DescribeCapacityBlocksTrait
{
    /**
     * @param DescribeCapacityBlocksRequest $args
     * @return DescribeCapacityBlocksResponse
     */
    public function describeCapacityBlocks(DescribeCapacityBlocksRequest $args)
    {
        $result = parent::describeCapacityBlocks($args->toArray());
        return new DescribeCapacityBlocksResponse($result->toArray());
    }
}
