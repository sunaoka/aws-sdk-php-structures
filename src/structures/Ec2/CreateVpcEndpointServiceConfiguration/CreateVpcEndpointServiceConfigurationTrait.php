<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration;

trait CreateVpcEndpointServiceConfigurationTrait
{
    /**
     * @param CreateVpcEndpointServiceConfigurationRequest $args
     * @return CreateVpcEndpointServiceConfigurationResponse
     */
    public function createVpcEndpointServiceConfiguration(CreateVpcEndpointServiceConfigurationRequest $args)
    {
        $result = parent::createVpcEndpointServiceConfiguration($args->toArray());
        return new CreateVpcEndpointServiceConfigurationResponse($result->toArray());
    }
}
