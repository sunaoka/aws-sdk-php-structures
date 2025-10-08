<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGateways;

trait DescribeLocalGatewaysTrait
{
    /**
     * @param DescribeLocalGatewaysRequest $args
     * @return DescribeLocalGatewaysResponse
     */
    public function describeLocalGateways(DescribeLocalGatewaysRequest $args)
    {
        $result = parent::describeLocalGateways($args->toArray());
        return new DescribeLocalGatewaysResponse($result->toArray());
    }
}
