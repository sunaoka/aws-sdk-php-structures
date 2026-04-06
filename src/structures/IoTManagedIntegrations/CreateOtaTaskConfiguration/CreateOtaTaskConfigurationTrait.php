<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration;

trait CreateOtaTaskConfigurationTrait
{
    /**
     * @param CreateOtaTaskConfigurationRequest $args
     * @return CreateOtaTaskConfigurationResponse
     */
    public function createOtaTaskConfiguration(CreateOtaTaskConfigurationRequest $args)
    {
        $result = parent::createOtaTaskConfiguration($args->toArray());
        return new CreateOtaTaskConfigurationResponse($result->toArray());
    }
}
