<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchFacets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $searchText
 * @property list<Shapes\SearchFilter>|null $filters
 * @property list<'AVERAGE_CUSTOMER_RATING'|'CATEGORY'|'PUBLISHER'|'FULFILLMENT_OPTION_TYPE'|'PRICING_MODEL'|'PRICING_UNIT'|'DEPLOYED_ON_AWS'|'NUMBER_OF_PRODUCTS'>|null $facetTypes
 * @property string|null $nextToken
 */
class SearchFacetsRequest extends Request
{
    /**
     * @param array{
     *     searchText?: string|null,
     *     filters?: list<Shapes\SearchFilter>|null,
     *     facetTypes?: list<'AVERAGE_CUSTOMER_RATING'|'CATEGORY'|'PUBLISHER'|'FULFILLMENT_OPTION_TYPE'|'PRICING_MODEL'|'PRICING_UNIT'|'DEPLOYED_ON_AWS'|'NUMBER_OF_PRODUCTS'>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
