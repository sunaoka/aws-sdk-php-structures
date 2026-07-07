<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateRevenueAttribution;

trait UpdateRevenueAttributionTrait
{
    /**
     * @param UpdateRevenueAttributionRequest $args
     * @return UpdateRevenueAttributionResponse
     */
    public function updateRevenueAttribution(UpdateRevenueAttributionRequest $args)
    {
        $result = parent::updateRevenueAttribution($args->toArray());
        return new UpdateRevenueAttributionResponse($result->toArray());
    }
}
