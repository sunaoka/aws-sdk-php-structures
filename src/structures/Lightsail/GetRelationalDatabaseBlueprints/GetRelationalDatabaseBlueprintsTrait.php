<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBlueprints;

trait GetRelationalDatabaseBlueprintsTrait
{
    /**
     * @param GetRelationalDatabaseBlueprintsRequest $args
     * @return GetRelationalDatabaseBlueprintsResponse
     */
    public function getRelationalDatabaseBlueprints(GetRelationalDatabaseBlueprintsRequest $args)
    {
        $result = parent::getRelationalDatabaseBlueprints($args->toArray());
        return new GetRelationalDatabaseBlueprintsResponse($result->toArray());
    }
}
