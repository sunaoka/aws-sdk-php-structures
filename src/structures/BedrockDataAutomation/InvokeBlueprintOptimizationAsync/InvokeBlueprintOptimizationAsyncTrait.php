<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeBlueprintOptimizationAsync;

trait InvokeBlueprintOptimizationAsyncTrait
{
    /**
     * @param InvokeBlueprintOptimizationAsyncRequest $args
     * @return InvokeBlueprintOptimizationAsyncResponse
     */
    public function invokeBlueprintOptimizationAsync(InvokeBlueprintOptimizationAsyncRequest $args)
    {
        $result = parent::invokeBlueprintOptimizationAsync($args->toArray());
        return new InvokeBlueprintOptimizationAsyncResponse($result->toArray());
    }
}
