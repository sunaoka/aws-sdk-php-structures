<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints;

trait ListEnvironmentBlueprintsTrait
{
    /**
     * @param ListEnvironmentBlueprintsRequest $args
     * @return ListEnvironmentBlueprintsResponse
     */
    public function listEnvironmentBlueprints(ListEnvironmentBlueprintsRequest $args)
    {
        $result = parent::listEnvironmentBlueprints($args->toArray());
        return new ListEnvironmentBlueprintsResponse($result->toArray());
    }
}
