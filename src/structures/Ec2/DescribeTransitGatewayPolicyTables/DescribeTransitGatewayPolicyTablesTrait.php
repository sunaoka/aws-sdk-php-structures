<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayPolicyTables;

trait DescribeTransitGatewayPolicyTablesTrait
{
    /**
     * @param DescribeTransitGatewayPolicyTablesRequest $args
     * @return DescribeTransitGatewayPolicyTablesResponse
     */
    public function describeTransitGatewayPolicyTables(DescribeTransitGatewayPolicyTablesRequest $args)
    {
        $result = parent::describeTransitGatewayPolicyTables($args->toArray());
        return new DescribeTransitGatewayPolicyTablesResponse($result->toArray());
    }
}
