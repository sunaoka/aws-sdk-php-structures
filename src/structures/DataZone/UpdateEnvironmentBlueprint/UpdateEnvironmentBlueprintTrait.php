<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentBlueprint;

trait UpdateEnvironmentBlueprintTrait
{
    /**
     * @param UpdateEnvironmentBlueprintRequest $args
     * @return UpdateEnvironmentBlueprintResponse
     */
    public function updateEnvironmentBlueprint(UpdateEnvironmentBlueprintRequest $args)
    {
        $result = parent::updateEnvironmentBlueprint($args->toArray());
        return new UpdateEnvironmentBlueprintResponse($result->toArray());
    }
}
