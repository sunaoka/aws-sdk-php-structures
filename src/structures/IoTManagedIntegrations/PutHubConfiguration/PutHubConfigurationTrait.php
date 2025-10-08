<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutHubConfiguration;

trait PutHubConfigurationTrait
{
    /**
     * @param PutHubConfigurationRequest $args
     * @return PutHubConfigurationResponse
     */
    public function putHubConfiguration(PutHubConfigurationRequest $args)
    {
        $result = parent::putHubConfiguration($args->toArray());
        return new PutHubConfigurationResponse($result->toArray());
    }
}
