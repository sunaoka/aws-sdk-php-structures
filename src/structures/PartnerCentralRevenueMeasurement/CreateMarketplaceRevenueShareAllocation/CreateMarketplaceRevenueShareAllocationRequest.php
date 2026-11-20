<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $MarketplaceRevenueShareIdentifier
 * @property string|null $ClientToken
 * @property string $MarketplaceRevenueShareRevision
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property string $RevenueSharePercent
 */
class CreateMarketplaceRevenueShareAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     MarketplaceRevenueShareIdentifier: string,
     *     ClientToken?: string|null,
     *     MarketplaceRevenueShareRevision: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil: string,
     *     RevenueSharePercent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
