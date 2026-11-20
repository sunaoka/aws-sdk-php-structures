<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $MarketplaceRevenueShareIdentifier
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string|null $MarketplaceRevenueShareRevision
 */
class GetMarketplaceRevenueShareAllocationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     MarketplaceRevenueShareIdentifier: string,
     *     MarketplaceRevenueShareAllocationId: string,
     *     MarketplaceRevenueShareRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
