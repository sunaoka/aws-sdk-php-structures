<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCoipPools;

trait DescribeCoipPoolsTrait
{
    /**
     * @param DescribeCoipPoolsRequest $args
     * @return DescribeCoipPoolsResponse
     */
    public function describeCoipPools(DescribeCoipPoolsRequest $args)
    {
        $result = parent::describeCoipPools($args->toArray());
        return new DescribeCoipPoolsResponse($result->toArray());
    }
}
