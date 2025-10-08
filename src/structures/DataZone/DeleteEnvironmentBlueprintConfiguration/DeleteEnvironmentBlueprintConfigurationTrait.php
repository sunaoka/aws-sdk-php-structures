<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironmentBlueprintConfiguration;

trait DeleteEnvironmentBlueprintConfigurationTrait
{
    /**
     * @param DeleteEnvironmentBlueprintConfigurationRequest $args
     * @return DeleteEnvironmentBlueprintConfigurationResponse
     */
    public function deleteEnvironmentBlueprintConfiguration(DeleteEnvironmentBlueprintConfigurationRequest $args)
    {
        $result = parent::deleteEnvironmentBlueprintConfiguration($args->toArray());
        return new DeleteEnvironmentBlueprintConfigurationResponse($result->toArray());
    }
}
