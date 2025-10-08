<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration;

trait GetThingRuntimeConfigurationTrait
{
    /**
     * @param GetThingRuntimeConfigurationRequest $args
     * @return GetThingRuntimeConfigurationResponse
     */
    public function getThingRuntimeConfiguration(GetThingRuntimeConfigurationRequest $args)
    {
        $result = parent::getThingRuntimeConfiguration($args->toArray());
        return new GetThingRuntimeConfigurationResponse($result->toArray());
    }
}
