<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprint;

trait GetBlueprintTrait
{
    /**
     * @param GetBlueprintRequest $args
     * @return GetBlueprintResponse
     */
    public function getBlueprint(GetBlueprintRequest $args)
    {
        $result = parent::getBlueprint($args->toArray());
        return new GetBlueprintResponse($result->toArray());
    }
}
