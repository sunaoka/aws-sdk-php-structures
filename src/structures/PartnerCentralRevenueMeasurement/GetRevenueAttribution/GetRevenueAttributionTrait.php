<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttribution;

trait GetRevenueAttributionTrait
{
    /**
     * @param GetRevenueAttributionRequest $args
     * @return GetRevenueAttributionResponse
     */
    public function getRevenueAttribution(GetRevenueAttributionRequest $args)
    {
        $result = parent::getRevenueAttribution($args->toArray());
        return new GetRevenueAttributionResponse($result->toArray());
    }
}
