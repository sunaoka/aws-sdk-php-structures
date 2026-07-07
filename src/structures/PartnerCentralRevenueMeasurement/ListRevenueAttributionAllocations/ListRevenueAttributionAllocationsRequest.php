<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributionAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $RevenueAttributionIdentifier
 * @property list<'OFFER'|'OPPORTUNITY'>|null $EntityTypeFilters
 * @property list<string>|null $EntityIdentifierFilters
 * @property list<string>|null $CustomerAwsAccountIdFilters
 * @property 'ACTIVE'|'INACTIVE'|null $StatusFilter
 * @property string|null $AfterEffectiveFrom
 * @property string|null $BeforeEffectiveFrom
 * @property string|null $AfterEffectiveUntil
 * @property string|null $BeforeEffectiveUntil
 * @property 'EffectiveFrom'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $RevenueAttributionRevision
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRevenueAttributionAllocationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     RevenueAttributionIdentifier: string,
     *     EntityTypeFilters?: list<'OFFER'|'OPPORTUNITY'>|null,
     *     EntityIdentifierFilters?: list<string>|null,
     *     CustomerAwsAccountIdFilters?: list<string>|null,
     *     StatusFilter?: 'ACTIVE'|'INACTIVE'|null,
     *     AfterEffectiveFrom?: string|null,
     *     BeforeEffectiveFrom?: string|null,
     *     AfterEffectiveUntil?: string|null,
     *     BeforeEffectiveUntil?: string|null,
     *     SortBy?: 'EffectiveFrom'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     RevenueAttributionRevision?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
