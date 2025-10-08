<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServiceConfigurations;

trait DescribeVpcEndpointServiceConfigurationsTrait
{
    /**
     * @param DescribeVpcEndpointServiceConfigurationsRequest $args
     * @return DescribeVpcEndpointServiceConfigurationsResponse
     */
    public function describeVpcEndpointServiceConfigurations(DescribeVpcEndpointServiceConfigurationsRequest $args)
    {
        $result = parent::describeVpcEndpointServiceConfigurations($args->toArray());
        return new DescribeVpcEndpointServiceConfigurationsResponse($result->toArray());
    }
}
