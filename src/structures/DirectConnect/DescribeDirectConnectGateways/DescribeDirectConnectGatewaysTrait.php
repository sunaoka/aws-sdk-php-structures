<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGateways;

trait DescribeDirectConnectGatewaysTrait
{
    /**
     * @param DescribeDirectConnectGatewaysRequest $args
     * @return DescribeDirectConnectGatewaysResponse
     */
    public function describeDirectConnectGateways(DescribeDirectConnectGatewaysRequest $args)
    {
        $result = parent::describeDirectConnectGateways($args->toArray());
        return new DescribeDirectConnectGatewaysResponse($result->toArray());
    }
}
