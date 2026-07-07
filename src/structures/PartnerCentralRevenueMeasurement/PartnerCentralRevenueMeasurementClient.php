<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement;

class PartnerCentralRevenueMeasurementClient extends \Aws\PartnerCentralRevenueMeasurement\PartnerCentralRevenueMeasurementClient
{
    use CreateMarketplaceRevenueShare\CreateMarketplaceRevenueShareTrait;
    use CreateMarketplaceRevenueShareAllocation\CreateMarketplaceRevenueShareAllocationTrait;
    use CreateRevenueAttribution\CreateRevenueAttributionTrait;
    use GetMarketplaceRevenueShare\GetMarketplaceRevenueShareTrait;
    use GetMarketplaceRevenueShareAllocation\GetMarketplaceRevenueShareAllocationTrait;
    use GetRevenueAttribution\GetRevenueAttributionTrait;
    use GetRevenueAttributionAllocation\GetRevenueAttributionAllocationTrait;
    use GetRevenueAttributionAllocationsTask\GetRevenueAttributionAllocationsTaskTrait;
    use ListMarketplaceRevenueShareAllocations\ListMarketplaceRevenueShareAllocationsTrait;
    use ListMarketplaceRevenueShares\ListMarketplaceRevenueSharesTrait;
    use ListRevenueAttributionAllocations\ListRevenueAttributionAllocationsTrait;
    use ListRevenueAttributions\ListRevenueAttributionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartRevenueAttributionAllocationsTask\StartRevenueAttributionAllocationsTaskTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMarketplaceRevenueShareAllocation\UpdateMarketplaceRevenueShareAllocationTrait;
    use UpdateRevenueAttribution\UpdateRevenueAttributionTrait;
}
