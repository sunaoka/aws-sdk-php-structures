<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization;

trait GetSavingsPlansUtilizationTrait
{
    /**
     * @param GetSavingsPlansUtilizationRequest $args
     * @return GetSavingsPlansUtilizationResponse
     */
    public function getSavingsPlansUtilization(GetSavingsPlansUtilizationRequest $args)
    {
        $result = parent::getSavingsPlansUtilization($args->toArray());
        return new GetSavingsPlansUtilizationResponse($result->toArray());
    }
}
