<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeEgressOnlyInternetGateways;

trait DescribeEgressOnlyInternetGatewaysTrait
{
    /**
     * @param DescribeEgressOnlyInternetGatewaysRequest $args
     * @return DescribeEgressOnlyInternetGatewaysResponse
     */
    public function describeEgressOnlyInternetGateways(DescribeEgressOnlyInternetGatewaysRequest $args)
    {
        $result = parent::describeEgressOnlyInternetGateways($args->toArray());
        return new DescribeEgressOnlyInternetGatewaysResponse($result->toArray());
    }
}
