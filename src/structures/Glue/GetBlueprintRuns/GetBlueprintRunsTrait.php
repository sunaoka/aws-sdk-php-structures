<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRuns;

trait GetBlueprintRunsTrait
{
    /**
     * @param GetBlueprintRunsRequest $args
     * @return GetBlueprintRunsResponse
     */
    public function getBlueprintRuns(GetBlueprintRunsRequest $args)
    {
        $result = parent::getBlueprintRuns($args->toArray());
        return new GetBlueprintRunsResponse($result->toArray());
    }
}
