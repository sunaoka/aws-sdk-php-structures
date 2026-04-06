<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServers;

trait DescribeRouteServersTrait
{
    /**
     * @param DescribeRouteServersRequest $args
     * @return DescribeRouteServersResponse
     */
    public function describeRouteServers(DescribeRouteServersRequest $args)
    {
        $result = parent::describeRouteServers($args->toArray());
        return new DescribeRouteServersResponse($result->toArray());
    }
}
