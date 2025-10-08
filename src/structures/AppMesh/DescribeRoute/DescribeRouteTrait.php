<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute;

trait DescribeRouteTrait
{
    /**
     * @param DescribeRouteRequest $args
     * @return DescribeRouteResponse
     */
    public function describeRoute(DescribeRouteRequest $args)
    {
        $result = parent::describeRoute($args->toArray());
        return new DescribeRouteResponse($result->toArray());
    }
}
