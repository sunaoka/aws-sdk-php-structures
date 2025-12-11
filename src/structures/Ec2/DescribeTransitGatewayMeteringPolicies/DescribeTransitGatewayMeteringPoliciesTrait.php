<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayMeteringPolicies;

trait DescribeTransitGatewayMeteringPoliciesTrait
{
    /**
     * @param DescribeTransitGatewayMeteringPoliciesRequest $args
     * @return DescribeTransitGatewayMeteringPoliciesResponse
     */
    public function describeTransitGatewayMeteringPolicies(DescribeTransitGatewayMeteringPoliciesRequest $args)
    {
        $result = parent::describeTransitGatewayMeteringPolicies($args->toArray());
        return new DescribeTransitGatewayMeteringPoliciesResponse($result->toArray());
    }
}
