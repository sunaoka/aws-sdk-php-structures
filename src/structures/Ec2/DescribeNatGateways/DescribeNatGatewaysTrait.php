<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNatGateways;

trait DescribeNatGatewaysTrait
{
    /**
     * @param DescribeNatGatewaysRequest $args
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGateways(DescribeNatGatewaysRequest $args)
    {
        $result = parent::describeNatGateways($args->toArray());
        return new DescribeNatGatewaysResponse($result->toArray());
    }
}
