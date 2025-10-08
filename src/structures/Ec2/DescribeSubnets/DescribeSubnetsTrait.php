<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets;

trait DescribeSubnetsTrait
{
    /**
     * @param DescribeSubnetsRequest $args
     * @return DescribeSubnetsResponse
     */
    public function describeSubnets(DescribeSubnetsRequest $args)
    {
        $result = parent::describeSubnets($args->toArray());
        return new DescribeSubnetsResponse($result->toArray());
    }
}
