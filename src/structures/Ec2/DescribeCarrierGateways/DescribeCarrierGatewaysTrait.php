<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCarrierGateways;

trait DescribeCarrierGatewaysTrait
{
    /**
     * @param DescribeCarrierGatewaysRequest $args
     * @return DescribeCarrierGatewaysResponse
     */
    public function describeCarrierGateways(DescribeCarrierGatewaysRequest $args)
    {
        $result = parent::describeCarrierGateways($args->toArray());
        return new DescribeCarrierGatewaysResponse($result->toArray());
    }
}
