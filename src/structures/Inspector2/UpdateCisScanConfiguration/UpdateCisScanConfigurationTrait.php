<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration;

trait UpdateCisScanConfigurationTrait
{
    /**
     * @param UpdateCisScanConfigurationRequest $args
     * @return UpdateCisScanConfigurationResponse
     */
    public function updateCisScanConfiguration(UpdateCisScanConfigurationRequest $args)
    {
        $result = parent::updateCisScanConfiguration($args->toArray());
        return new UpdateCisScanConfigurationResponse($result->toArray());
    }
}
