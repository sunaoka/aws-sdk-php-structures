<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateRevenueAttribution;

trait CreateRevenueAttributionTrait
{
    /**
     * @param CreateRevenueAttributionRequest $args
     * @return CreateRevenueAttributionResponse
     */
    public function createRevenueAttribution(CreateRevenueAttributionRequest $args)
    {
        $result = parent::createRevenueAttribution($args->toArray());
        return new CreateRevenueAttributionResponse($result->toArray());
    }
}
