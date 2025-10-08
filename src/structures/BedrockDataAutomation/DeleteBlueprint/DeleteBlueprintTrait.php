<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteBlueprint;

trait DeleteBlueprintTrait
{
    /**
     * @param DeleteBlueprintRequest $args
     * @return DeleteBlueprintResponse
     */
    public function deleteBlueprint(DeleteBlueprintRequest $args)
    {
        $result = parent::deleteBlueprint($args->toArray());
        return new DeleteBlueprintResponse($result->toArray());
    }
}
