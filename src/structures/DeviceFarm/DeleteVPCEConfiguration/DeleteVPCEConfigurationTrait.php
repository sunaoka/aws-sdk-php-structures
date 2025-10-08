<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteVPCEConfiguration;

trait DeleteVPCEConfigurationTrait
{
    /**
     * @param DeleteVPCEConfigurationRequest $args
     * @return DeleteVPCEConfigurationResponse
     */
    public function deleteVPCEConfiguration(DeleteVPCEConfigurationRequest $args)
    {
        $result = parent::deleteVPCEConfiguration($args->toArray());
        return new DeleteVPCEConfigurationResponse($result->toArray());
    }
}
