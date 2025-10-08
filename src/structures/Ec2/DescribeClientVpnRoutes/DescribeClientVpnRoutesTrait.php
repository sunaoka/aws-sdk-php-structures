<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnRoutes;

trait DescribeClientVpnRoutesTrait
{
    /**
     * @param DescribeClientVpnRoutesRequest $args
     * @return DescribeClientVpnRoutesResponse
     */
    public function describeClientVpnRoutes(DescribeClientVpnRoutesRequest $args)
    {
        $result = parent::describeClientVpnRoutes($args->toArray());
        return new DescribeClientVpnRoutesResponse($result->toArray());
    }
}
