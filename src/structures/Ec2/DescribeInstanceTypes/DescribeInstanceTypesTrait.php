<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes;

trait DescribeInstanceTypesTrait
{
    /**
     * @param DescribeInstanceTypesRequest $args
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes(DescribeInstanceTypesRequest $args)
    {
        $result = parent::describeInstanceTypes($args->toArray());
        return new DescribeInstanceTypesResponse($result->toArray());
    }
}
