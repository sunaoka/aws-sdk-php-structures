<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributions;

trait ListRevenueAttributionsTrait
{
    /**
     * @param ListRevenueAttributionsRequest $args
     * @return ListRevenueAttributionsResponse
     */
    public function listRevenueAttributions(ListRevenueAttributionsRequest $args)
    {
        $result = parent::listRevenueAttributions($args->toArray());
        return new ListRevenueAttributionsResponse($result->toArray());
    }
}
