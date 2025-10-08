<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails;

trait GetSavingsPlansUtilizationDetailsTrait
{
    /**
     * @param GetSavingsPlansUtilizationDetailsRequest $args
     * @return GetSavingsPlansUtilizationDetailsResponse
     */
    public function getSavingsPlansUtilizationDetails(GetSavingsPlansUtilizationDetailsRequest $args)
    {
        $result = parent::getSavingsPlansUtilizationDetails($args->toArray());
        return new GetSavingsPlansUtilizationDetailsResponse($result->toArray());
    }
}
