<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprintVersion;

trait CreateBlueprintVersionTrait
{
    /**
     * @param CreateBlueprintVersionRequest $args
     * @return CreateBlueprintVersionResponse
     */
    public function createBlueprintVersion(CreateBlueprintVersionRequest $args)
    {
        $result = parent::createBlueprintVersion($args->toArray());
        return new CreateBlueprintVersionResponse($result->toArray());
    }
}
