<?php

namespace Sunaoka\Aws\Structures\MarketplaceReporting\GetBuyerDashboard;

trait GetBuyerDashboardTrait
{
    /**
     * @param GetBuyerDashboardRequest $args
     * @return GetBuyerDashboardResponse
     */
    public function getBuyerDashboard(GetBuyerDashboardRequest $args)
    {
        $result = parent::getBuyerDashboard($args->toArray());
        return new GetBuyerDashboardResponse($result->toArray());
    }
}
