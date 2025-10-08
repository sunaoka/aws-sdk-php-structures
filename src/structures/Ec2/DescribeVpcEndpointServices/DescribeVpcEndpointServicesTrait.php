<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices;

trait DescribeVpcEndpointServicesTrait
{
    /**
     * @param DescribeVpcEndpointServicesRequest $args
     * @return DescribeVpcEndpointServicesResponse
     */
    public function describeVpcEndpointServices(DescribeVpcEndpointServicesRequest $args)
    {
        $result = parent::describeVpcEndpointServices($args->toArray());
        return new DescribeVpcEndpointServicesResponse($result->toArray());
    }
}
