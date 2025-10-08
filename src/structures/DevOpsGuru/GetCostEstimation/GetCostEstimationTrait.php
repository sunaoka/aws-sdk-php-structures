<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation;

trait GetCostEstimationTrait
{
    /**
     * @param GetCostEstimationRequest $args
     * @return GetCostEstimationResponse
     */
    public function getCostEstimation(GetCostEstimationRequest $args)
    {
        $result = parent::getCostEstimation($args->toArray());
        return new GetCostEstimationResponse($result->toArray());
    }
}
