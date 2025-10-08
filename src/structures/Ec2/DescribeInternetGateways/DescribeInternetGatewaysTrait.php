<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInternetGateways;

trait DescribeInternetGatewaysTrait
{
    /**
     * @param DescribeInternetGatewaysRequest $args
     * @return DescribeInternetGatewaysResponse
     */
    public function describeInternetGateways(DescribeInternetGatewaysRequest $args)
    {
        $result = parent::describeInternetGateways($args->toArray());
        return new DescribeInternetGatewaysResponse($result->toArray());
    }
}
