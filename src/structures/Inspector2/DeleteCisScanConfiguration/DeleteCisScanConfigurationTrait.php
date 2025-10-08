<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCisScanConfiguration;

trait DeleteCisScanConfigurationTrait
{
    /**
     * @param DeleteCisScanConfigurationRequest $args
     * @return DeleteCisScanConfigurationResponse
     */
    public function deleteCisScanConfiguration(DeleteCisScanConfigurationRequest $args)
    {
        $result = parent::deleteCisScanConfiguration($args->toArray());
        return new DeleteCisScanConfigurationResponse($result->toArray());
    }
}
