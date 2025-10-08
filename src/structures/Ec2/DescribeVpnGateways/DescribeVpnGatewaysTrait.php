<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways;

trait DescribeVpnGatewaysTrait
{
    /**
     * @param DescribeVpnGatewaysRequest $args
     * @return DescribeVpnGatewaysResponse
     */
    public function describeVpnGateways(DescribeVpnGatewaysRequest $args)
    {
        $result = parent::describeVpnGateways($args->toArray());
        return new DescribeVpnGatewaysResponse($result->toArray());
    }
}
