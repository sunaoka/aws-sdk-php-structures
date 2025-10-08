<?php

namespace Sunaoka\Aws\Structures\Glue\StartBlueprintRun;

trait StartBlueprintRunTrait
{
    /**
     * @param StartBlueprintRunRequest $args
     * @return StartBlueprintRunResponse
     */
    public function startBlueprintRun(StartBlueprintRunRequest $args)
    {
        $result = parent::startBlueprintRun($args->toArray());
        return new StartBlueprintRunResponse($result->toArray());
    }
}
