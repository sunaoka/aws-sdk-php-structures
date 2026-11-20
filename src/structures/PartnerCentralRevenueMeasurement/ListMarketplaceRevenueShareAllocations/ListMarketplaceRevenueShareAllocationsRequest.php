<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShareAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $MarketplaceRevenueShareIdentifier
 * @property 'ACTIVE'|'INACTIVE'|null $StatusFilter
 * @property string|null $AfterEffectiveFrom
 * @property string|null $BeforeEffectiveFrom
 * @property string|null $AfterEffectiveUntil
 * @property string|null $BeforeEffectiveUntil
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
     *     MarketplaceRevenueShareIdentifier: string,
     *     StatusFilter?: 'ACTIVE'|'INACTIVE'|null,
     *     AfterEffectiveFrom?: string|null,
     *     BeforeEffectiveFrom?: string|null,
     *     AfterEffectiveUntil?: string|null,
     *     BeforeEffectiveUntil?: string|null,
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
