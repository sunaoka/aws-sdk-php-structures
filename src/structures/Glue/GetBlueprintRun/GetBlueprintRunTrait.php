<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRun;

trait GetBlueprintRunTrait
{
    /**
     * @param GetBlueprintRunRequest $args
     * @return GetBlueprintRunResponse
     */
    public function getBlueprintRun(GetBlueprintRunRequest $args)
    {
        $result = parent::getBlueprintRun($args->toArray());
        return new GetBlueprintRunResponse($result->toArray());
    }
}
