<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShareAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string $MarketplaceRevenueShareIdentifier
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property string $RevenueSharePercent
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class MarketplaceRevenueShareAllocationSummary extends Shape
{
    /**
     * @param array{
     *     MarketplaceRevenueShareAllocationId: string,
     *     MarketplaceRevenueShareIdentifier: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil: string,
     *     RevenueSharePercent: string,
     *     Status: 'ACTIVE'|'INACTIVE',
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     LastModifiedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
