<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissionsDimensionValues;

trait GetEstimatedCarbonEmissionsDimensionValuesTrait
{
    /**
     * @param GetEstimatedCarbonEmissionsDimensionValuesRequest $args
     * @return GetEstimatedCarbonEmissionsDimensionValuesResponse
     */
    public function getEstimatedCarbonEmissionsDimensionValues(GetEstimatedCarbonEmissionsDimensionValuesRequest $args)
    {
        $result = parent::getEstimatedCarbonEmissionsDimensionValues($args->toArray());
        return new GetEstimatedCarbonEmissionsDimensionValuesResponse($result->toArray());
    }
}
