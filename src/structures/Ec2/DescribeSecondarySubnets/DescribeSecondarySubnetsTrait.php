<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondarySubnets;

trait DescribeSecondarySubnetsTrait
{
    /**
     * @param DescribeSecondarySubnetsRequest $args
     * @return DescribeSecondarySubnetsResponse
     */
    public function describeSecondarySubnets(DescribeSecondarySubnetsRequest $args)
    {
        $result = parent::describeSecondarySubnets($args->toArray());
        return new DescribeSecondarySubnetsResponse($result->toArray());
    }
}
