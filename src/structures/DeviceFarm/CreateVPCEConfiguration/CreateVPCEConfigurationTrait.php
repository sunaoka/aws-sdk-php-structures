<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateVPCEConfiguration;

trait CreateVPCEConfigurationTrait
{
    /**
     * @param CreateVPCEConfigurationRequest $args
     * @return CreateVPCEConfigurationResponse
     */
    public function createVPCEConfiguration(CreateVPCEConfigurationRequest $args)
    {
        $result = parent::createVPCEConfiguration($args->toArray());
        return new CreateVPCEConfigurationResponse($result->toArray());
    }
}
