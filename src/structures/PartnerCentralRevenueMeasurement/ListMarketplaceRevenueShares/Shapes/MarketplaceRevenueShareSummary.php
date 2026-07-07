<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string $Arn
 * @property 'AWS'|'Sandbox'|null $Catalog
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property int|null $LatestRevision
 * @property int|null $TotalActiveMarketplaceRevenueShareAllocationCount
 * @property int|null $TotalMarketplaceRevenueShareAllocationCount
 */
class MarketplaceRevenueShareSummary extends Shape
{
    /**
     * @param array{
     *     ProductId: string,
     *     Arn: string,
     *     Catalog?: 'AWS'|'Sandbox'|null,
     *     ProductCode?: string|null,
     *     ProductName?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LatestRevision?: int|null,
     *     TotalActiveMarketplaceRevenueShareAllocationCount?: int|null,
     *     TotalMarketplaceRevenueShareAllocationCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
