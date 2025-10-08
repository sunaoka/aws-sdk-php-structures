<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBlueprints;

trait GetBlueprintsTrait
{
    /**
     * @param GetBlueprintsRequest $args
     * @return GetBlueprintsResponse
     */
    public function getBlueprints(GetBlueprintsRequest $args)
    {
        $result = parent::getBlueprints($args->toArray());
        return new GetBlueprintsResponse($result->toArray());
    }
}
