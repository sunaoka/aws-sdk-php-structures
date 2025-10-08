<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetRuntimeLogConfiguration;

trait GetRuntimeLogConfigurationTrait
{
    /**
     * @param GetRuntimeLogConfigurationRequest $args
     * @return GetRuntimeLogConfigurationResponse
     */
    public function getRuntimeLogConfiguration(GetRuntimeLogConfigurationRequest $args)
    {
        $result = parent::getRuntimeLogConfiguration($args->toArray());
        return new GetRuntimeLogConfigurationResponse($result->toArray());
    }
}
