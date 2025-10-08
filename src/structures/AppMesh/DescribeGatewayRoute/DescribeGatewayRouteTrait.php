<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute;

trait DescribeGatewayRouteTrait
{
    /**
     * @param DescribeGatewayRouteRequest $args
     * @return DescribeGatewayRouteResponse
     */
    public function describeGatewayRoute(DescribeGatewayRouteRequest $args)
    {
        $result = parent::describeGatewayRoute($args->toArray());
        return new DescribeGatewayRouteResponse($result->toArray());
    }
}
