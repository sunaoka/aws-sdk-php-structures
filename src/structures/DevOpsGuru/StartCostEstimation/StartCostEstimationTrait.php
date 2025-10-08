<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\StartCostEstimation;

trait StartCostEstimationTrait
{
    /**
     * @param StartCostEstimationRequest $args
     * @return StartCostEstimationResponse
     */
    public function startCostEstimation(StartCostEstimationRequest $args)
    {
        $result = parent::startCostEstimation($args->toArray());
        return new StartCostEstimationResponse($result->toArray());
    }
}
