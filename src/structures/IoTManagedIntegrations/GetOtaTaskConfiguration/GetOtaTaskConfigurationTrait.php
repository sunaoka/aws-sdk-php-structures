<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTaskConfiguration;

trait GetOtaTaskConfigurationTrait
{
    /**
     * @param GetOtaTaskConfigurationRequest $args
     * @return GetOtaTaskConfigurationResponse
     */
    public function getOtaTaskConfiguration(GetOtaTaskConfigurationRequest $args)
    {
        $result = parent::getOtaTaskConfiguration($args->toArray());
        return new GetOtaTaskConfigurationResponse($result->toArray());
    }
}
