<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateGatewayCapabilityConfiguration;

trait UpdateGatewayCapabilityConfigurationTrait
{
    /**
     * @param UpdateGatewayCapabilityConfigurationRequest $args
     * @return UpdateGatewayCapabilityConfigurationResponse
     */
    public function updateGatewayCapabilityConfiguration(UpdateGatewayCapabilityConfigurationRequest $args)
    {
        $result = parent::updateGatewayCapabilityConfiguration($args->toArray());
        return new UpdateGatewayCapabilityConfigurationResponse($result->toArray());
    }
}
