<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateVPCEConfiguration;

trait UpdateVPCEConfigurationTrait
{
    /**
     * @param UpdateVPCEConfigurationRequest $args
     * @return UpdateVPCEConfigurationResponse
     */
    public function updateVPCEConfiguration(UpdateVPCEConfigurationRequest $args)
    {
        $result = parent::updateVPCEConfiguration($args->toArray());
        return new UpdateVPCEConfigurationResponse($result->toArray());
    }
}
