<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentBlueprint;

trait CreateEnvironmentBlueprintTrait
{
    /**
     * @param CreateEnvironmentBlueprintRequest $args
     * @return CreateEnvironmentBlueprintResponse
     */
    public function createEnvironmentBlueprint(CreateEnvironmentBlueprintRequest $args)
    {
        $result = parent::createEnvironmentBlueprint($args->toArray());
        return new CreateEnvironmentBlueprintResponse($result->toArray());
    }
}
