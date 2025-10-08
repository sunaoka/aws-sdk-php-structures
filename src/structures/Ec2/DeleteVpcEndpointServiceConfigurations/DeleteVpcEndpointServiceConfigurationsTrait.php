<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointServiceConfigurations;

trait DeleteVpcEndpointServiceConfigurationsTrait
{
    /**
     * @param DeleteVpcEndpointServiceConfigurationsRequest $args
     * @return DeleteVpcEndpointServiceConfigurationsResponse
     */
    public function deleteVpcEndpointServiceConfigurations(DeleteVpcEndpointServiceConfigurationsRequest $args)
    {
        $result = parent::deleteVpcEndpointServiceConfigurations($args->toArray());
        return new DeleteVpcEndpointServiceConfigurationsResponse($result->toArray());
    }
}
