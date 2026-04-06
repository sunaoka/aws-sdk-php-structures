<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetHubConfiguration;

trait GetHubConfigurationTrait
{
    /**
     * @param GetHubConfigurationRequest $args
     * @return GetHubConfigurationResponse
     */
    public function getHubConfiguration(GetHubConfigurationRequest $args)
    {
        $result = parent::getHubConfiguration($args->toArray());
        return new GetHubConfigurationResponse($result->toArray());
    }
}
