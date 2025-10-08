<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations;

trait ListEnvironmentBlueprintConfigurationsTrait
{
    /**
     * @param ListEnvironmentBlueprintConfigurationsRequest $args
     * @return ListEnvironmentBlueprintConfigurationsResponse
     */
    public function listEnvironmentBlueprintConfigurations(ListEnvironmentBlueprintConfigurationsRequest $args)
    {
        $result = parent::listEnvironmentBlueprintConfigurations($args->toArray());
        return new ListEnvironmentBlueprintConfigurationsResponse($result->toArray());
    }
}
