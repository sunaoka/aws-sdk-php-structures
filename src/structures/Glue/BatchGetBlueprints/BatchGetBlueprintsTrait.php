<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints;

trait BatchGetBlueprintsTrait
{
    /**
     * @param BatchGetBlueprintsRequest $args
     * @return BatchGetBlueprintsResponse
     */
    public function batchGetBlueprints(BatchGetBlueprintsRequest $args)
    {
        $result = parent::batchGetBlueprints($args->toArray());
        return new BatchGetBlueprintsResponse($result->toArray());
    }
}
