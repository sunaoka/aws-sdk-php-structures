<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprint;

trait GetEnvironmentBlueprintTrait
{
    /**
     * @param GetEnvironmentBlueprintRequest $args
     * @return GetEnvironmentBlueprintResponse
     */
    public function getEnvironmentBlueprint(GetEnvironmentBlueprintRequest $args)
    {
        $result = parent::getEnvironmentBlueprint($args->toArray());
        return new GetEnvironmentBlueprintResponse($result->toArray());
    }
}
