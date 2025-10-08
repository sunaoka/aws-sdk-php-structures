<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints;

trait DescribeClientVpnEndpointsTrait
{
    /**
     * @param DescribeClientVpnEndpointsRequest $args
     * @return DescribeClientVpnEndpointsResponse
     */
    public function describeClientVpnEndpoints(DescribeClientVpnEndpointsRequest $args)
    {
        $result = parent::describeClientVpnEndpoints($args->toArray());
        return new DescribeClientVpnEndpointsResponse($result->toArray());
    }
}
