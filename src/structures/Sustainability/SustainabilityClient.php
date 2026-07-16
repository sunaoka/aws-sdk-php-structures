<?php

namespace Sunaoka\Aws\Structures\Sustainability;

class SustainabilityClient extends \Aws\Sustainability\SustainabilityClient
{
    use GetEstimatedCarbonEmissions\GetEstimatedCarbonEmissionsTrait;
    use GetEstimatedCarbonEmissionsDimensionValues\GetEstimatedCarbonEmissionsDimensionValuesTrait;
    use GetEstimatedWaterAllocation\GetEstimatedWaterAllocationTrait;
    use GetEstimatedWaterAllocationDimensionValues\GetEstimatedWaterAllocationDimensionValuesTrait;
}
