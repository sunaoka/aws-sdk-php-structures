<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShareAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $ProductId
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property string|null $AfterEffectiveFrom
 * @property string|null $BeforeEffectiveFrom
 * @property 'EffectiveFrom'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $MarketplaceRevenueShareRevision
 */
class ListMarketplaceRevenueShareAllocationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductId: string,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     AfterEffectiveFrom?: string|null,
     *     BeforeEffectiveFrom?: string|null,
     *     SortBy?: 'EffectiveFrom'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     MarketplaceRevenueShareRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
