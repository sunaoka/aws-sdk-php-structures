<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGateways;

trait DescribeTransitGatewaysTrait
{
    /**
     * @param DescribeTransitGatewaysRequest $args
     * @return DescribeTransitGatewaysResponse
     */
    public function describeTransitGateways(DescribeTransitGatewaysRequest $args)
    {
        $result = parent::describeTransitGateways($args->toArray());
        return new DescribeTransitGatewaysResponse($result->toArray());
    }
}
