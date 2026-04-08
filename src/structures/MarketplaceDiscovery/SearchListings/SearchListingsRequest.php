<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $searchText
 * @property list<Shapes\SearchFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property 'RELEVANCE'|'AVERAGE_CUSTOMER_RATING'|null $sortBy
 * @property 'DESCENDING'|'ASCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class SearchListingsRequest extends Request
{
    /**
     * @param array{
     *     searchText?: string|null,
     *     filters?: list<Shapes\SearchFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     sortBy?: 'RELEVANCE'|'AVERAGE_CUSTOMER_RATING'|null,
     *     sortOrder?: 'DESCENDING'|'ASCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
