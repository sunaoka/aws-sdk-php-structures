<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprintOptimizationStatus;

trait GetBlueprintOptimizationStatusTrait
{
    /**
     * @param GetBlueprintOptimizationStatusRequest $args
     * @return GetBlueprintOptimizationStatusResponse
     */
    public function getBlueprintOptimizationStatus(GetBlueprintOptimizationStatusRequest $args)
    {
        $result = parent::getBlueprintOptimizationStatus($args->toArray());
        return new GetBlueprintOptimizationStatusResponse($result->toArray());
    }
}
