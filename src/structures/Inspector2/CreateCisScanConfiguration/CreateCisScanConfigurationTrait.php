<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration;

trait CreateCisScanConfigurationTrait
{
    /**
     * @param CreateCisScanConfigurationRequest $args
     * @return CreateCisScanConfigurationResponse
     */
    public function createCisScanConfiguration(CreateCisScanConfigurationRequest $args)
    {
        $result = parent::createCisScanConfiguration($args->toArray());
        return new CreateCisScanConfigurationResponse($result->toArray());
    }
}
