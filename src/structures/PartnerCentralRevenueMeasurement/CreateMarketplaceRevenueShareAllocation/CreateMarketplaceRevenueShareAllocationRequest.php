<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $ProductId
 * @property string|null $ClientToken
 * @property string $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property string $RevenueSharePercent
 */
class CreateMarketplaceRevenueShareAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductId: string,
     *     ClientToken?: string|null,
     *     EffectiveFrom: string,
     *     EffectiveUntil?: string|null,
     *     RevenueSharePercent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
