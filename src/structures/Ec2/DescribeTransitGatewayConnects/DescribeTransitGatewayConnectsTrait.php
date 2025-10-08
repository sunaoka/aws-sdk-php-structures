<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnects;

trait DescribeTransitGatewayConnectsTrait
{
    /**
     * @param DescribeTransitGatewayConnectsRequest $args
     * @return DescribeTransitGatewayConnectsResponse
     */
    public function describeTransitGatewayConnects(DescribeTransitGatewayConnectsRequest $args)
    {
        $result = parent::describeTransitGatewayConnects($args->toArray());
        return new DescribeTransitGatewayConnectsResponse($result->toArray());
    }
}
