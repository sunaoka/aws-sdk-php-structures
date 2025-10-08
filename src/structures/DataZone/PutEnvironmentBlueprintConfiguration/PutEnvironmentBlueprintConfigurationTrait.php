<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

trait PutEnvironmentBlueprintConfigurationTrait
{
    /**
     * @param PutEnvironmentBlueprintConfigurationRequest $args
     * @return PutEnvironmentBlueprintConfigurationResponse
     */
    public function putEnvironmentBlueprintConfiguration(PutEnvironmentBlueprintConfigurationRequest $args)
    {
        $result = parent::putEnvironmentBlueprintConfiguration($args->toArray());
        return new PutEnvironmentBlueprintConfigurationResponse($result->toArray());
    }
}
