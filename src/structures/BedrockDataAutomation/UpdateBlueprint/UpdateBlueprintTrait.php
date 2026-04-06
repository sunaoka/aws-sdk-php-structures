<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateBlueprint;

trait UpdateBlueprintTrait
{
    /**
     * @param UpdateBlueprintRequest $args
     * @return UpdateBlueprintResponse
     */
    public function updateBlueprint(UpdateBlueprintRequest $args)
    {
        $result = parent::updateBlueprint($args->toArray());
        return new UpdateBlueprintResponse($result->toArray());
    }
}
