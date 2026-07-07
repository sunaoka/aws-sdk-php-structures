<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $ProductId
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string|null $MarketplaceRevenueShareRevision
 */
class GetMarketplaceRevenueShareAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductId: string,
     *     MarketplaceRevenueShareAllocationId: string,
     *     MarketplaceRevenueShareRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
