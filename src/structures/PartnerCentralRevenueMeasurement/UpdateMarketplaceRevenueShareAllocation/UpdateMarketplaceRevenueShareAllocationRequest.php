<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $ProductId
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string $MarketplaceRevenueShareRevision
 * @property string|null $ClientToken
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property string|null $RevenueSharePercent
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 */
class UpdateMarketplaceRevenueShareAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductId: string,
     *     MarketplaceRevenueShareAllocationId: string,
     *     MarketplaceRevenueShareRevision: string,
     *     ClientToken?: string|null,
     *     EffectiveFrom?: string|null,
     *     EffectiveUntil?: string|null,
     *     RevenueSharePercent?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
