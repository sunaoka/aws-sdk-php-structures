<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchFacets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max> $totalResults
 * @property array<'AVERAGE_CUSTOMER_RATING'|'CATEGORY'|'PUBLISHER'|'FULFILLMENT_OPTION_TYPE'|'PRICING_MODEL'|'PRICING_UNIT'|'DEPLOYED_ON_AWS'|'NUMBER_OF_PRODUCTS'|'CERTIFICATES'|'SPECIALIZATION'|'SPECIALIZATION_CATEGORY'|'SELLER_ENGAGEMENT'|'TRUST_CENTER', list<Shapes\ListingFacet>> $listingFacets
 * @property string|null $nextToken
 */
class SearchFacetsResponse extends Response
{
}
