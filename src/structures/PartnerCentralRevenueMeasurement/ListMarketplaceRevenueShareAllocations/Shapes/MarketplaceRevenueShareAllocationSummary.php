<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShareAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string $ProductId
 * @property string|null $ProductName
 * @property string $Arn
 * @property string $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property string $RevenueSharePercent
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class MarketplaceRevenueShareAllocationSummary extends Shape
{
    /**
     * @param array{
     *     MarketplaceRevenueShareAllocationId: string,
     *     ProductId: string,
     *     ProductName?: string|null,
     *     Arn: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil?: string|null,
     *     RevenueSharePercent: string,
     *     Status: 'ACTIVE'|'INACTIVE',
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
