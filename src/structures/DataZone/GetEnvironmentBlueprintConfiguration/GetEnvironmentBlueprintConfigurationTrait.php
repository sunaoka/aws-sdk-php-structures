<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprintConfiguration;

trait GetEnvironmentBlueprintConfigurationTrait
{
    /**
     * @param GetEnvironmentBlueprintConfigurationRequest $args
     * @return GetEnvironmentBlueprintConfigurationResponse
     */
    public function getEnvironmentBlueprintConfiguration(GetEnvironmentBlueprintConfigurationRequest $args)
    {
        $result = parent::getEnvironmentBlueprintConfiguration($args->toArray());
        return new GetEnvironmentBlueprintConfigurationResponse($result->toArray());
    }
}
