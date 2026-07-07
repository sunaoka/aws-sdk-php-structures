<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<string>|null $ProductIds
 * @property list<string>|null $ProductCodes
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 */
class ListMarketplaceRevenueSharesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductIds?: list<string>|null,
     *     ProductCodes?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
