<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<string>|null $Identifiers
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRevenueAttributionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Identifiers?: list<string>|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
