<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCustomerGateways;

trait DescribeCustomerGatewaysTrait
{
    /**
     * @param DescribeCustomerGatewaysRequest $args
     * @return DescribeCustomerGatewaysResponse
     */
    public function describeCustomerGateways(DescribeCustomerGatewaysRequest $args)
    {
        $result = parent::describeCustomerGateways($args->toArray());
        return new DescribeCustomerGatewaysResponse($result->toArray());
    }
}
