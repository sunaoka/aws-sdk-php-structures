<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShares;

trait ListMarketplaceRevenueSharesTrait
{
    /**
     * @param ListMarketplaceRevenueSharesRequest $args
     * @return ListMarketplaceRevenueSharesResponse
     */
    public function listMarketplaceRevenueShares(ListMarketplaceRevenueSharesRequest $args)
    {
        $result = parent::listMarketplaceRevenueShares($args->toArray());
        return new ListMarketplaceRevenueSharesResponse($result->toArray());
    }
}
