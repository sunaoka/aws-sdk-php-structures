<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServiceConfiguration;

trait ModifyVpcEndpointServiceConfigurationTrait
{
    /**
     * @param ModifyVpcEndpointServiceConfigurationRequest $args
     * @return ModifyVpcEndpointServiceConfigurationResponse
     */
    public function modifyVpcEndpointServiceConfiguration(ModifyVpcEndpointServiceConfigurationRequest $args)
    {
        $result = parent::modifyVpcEndpointServiceConfiguration($args->toArray());
        return new ModifyVpcEndpointServiceConfigurationResponse($result->toArray());
    }
}
