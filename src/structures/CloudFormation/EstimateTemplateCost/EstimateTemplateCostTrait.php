<?php

namespace Sunaoka\Aws\Structures\CloudFormation\EstimateTemplateCost;

trait EstimateTemplateCostTrait
{
    /**
     * @param EstimateTemplateCostRequest $args
     * @return EstimateTemplateCostResponse
     */
    public function estimateTemplateCost(EstimateTemplateCostRequest $args)
    {
        $result = parent::estimateTemplateCost($args->toArray());
        return new EstimateTemplateCostResponse($result->toArray());
    }
}
