<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration;

trait GetResourceEventConfigurationTrait
{
    /**
     * @param GetResourceEventConfigurationRequest $args
     * @return GetResourceEventConfigurationResponse
     */
    public function getResourceEventConfiguration(GetResourceEventConfigurationRequest $args)
    {
        $result = parent::getResourceEventConfiguration($args->toArray());
        return new GetResourceEventConfigurationResponse($result->toArray());
    }
}
