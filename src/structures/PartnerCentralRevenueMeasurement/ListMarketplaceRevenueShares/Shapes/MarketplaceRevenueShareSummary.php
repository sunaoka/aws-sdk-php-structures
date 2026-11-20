<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<MarketplaceRevenueShareProductSummary> $Products
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LatestRevision
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property int<0, max> $TotalActiveMarketplaceRevenueShareAllocationCount
 * @property int<0, max> $TotalMarketplaceRevenueShareAllocationCount
 */
class MarketplaceRevenueShareSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn: string,
     *     Catalog: 'AWS'|'Sandbox',
     *     Products: list<MarketplaceRevenueShareProductSummary>,
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     LatestRevision: string,
     *     EffectiveFrom?: string|null,
     *     EffectiveUntil?: string|null,
     *     TotalActiveMarketplaceRevenueShareAllocationCount: int<0, max>,
     *     TotalMarketplaceRevenueShareAllocationCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
