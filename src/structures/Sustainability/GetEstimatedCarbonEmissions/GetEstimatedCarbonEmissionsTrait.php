<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions;

trait GetEstimatedCarbonEmissionsTrait
{
    /**
     * @param GetEstimatedCarbonEmissionsRequest $args
     * @return GetEstimatedCarbonEmissionsResponse
     */
    public function getEstimatedCarbonEmissions(GetEstimatedCarbonEmissionsRequest $args)
    {
        $result = parent::getEstimatedCarbonEmissions($args->toArray());
        return new GetEstimatedCarbonEmissionsResponse($result->toArray());
    }
}
