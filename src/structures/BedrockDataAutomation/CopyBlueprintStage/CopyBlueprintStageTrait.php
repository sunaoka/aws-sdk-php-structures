<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CopyBlueprintStage;

trait CopyBlueprintStageTrait
{
    /**
     * @param CopyBlueprintStageRequest $args
     * @return CopyBlueprintStageResponse
     */
    public function copyBlueprintStage(CopyBlueprintStageRequest $args)
    {
        $result = parent::copyBlueprintStage($args->toArray());
        return new CopyBlueprintStageResponse($result->toArray());
    }
}
