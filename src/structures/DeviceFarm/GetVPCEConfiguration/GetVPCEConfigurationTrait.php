<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetVPCEConfiguration;

trait GetVPCEConfigurationTrait
{
    /**
     * @param GetVPCEConfigurationRequest $args
     * @return GetVPCEConfigurationResponse
     */
    public function getVPCEConfiguration(GetVPCEConfigurationRequest $args)
    {
        $result = parent::getVPCEConfiguration($args->toArray());
        return new GetVPCEConfigurationResponse($result->toArray());
    }
}
