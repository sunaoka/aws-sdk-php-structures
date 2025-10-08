<?php

namespace Sunaoka\Aws\Structures\Glue\ListBlueprints;

trait ListBlueprintsTrait
{
    /**
     * @param ListBlueprintsRequest $args
     * @return ListBlueprintsResponse
     */
    public function listBlueprints(ListBlueprintsRequest $args)
    {
        $result = parent::listBlueprints($args->toArray());
        return new ListBlueprintsResponse($result->toArray());
    }
}
