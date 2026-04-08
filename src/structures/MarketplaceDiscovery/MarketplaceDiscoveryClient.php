<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery;

class MarketplaceDiscoveryClient extends \Aws\MarketplaceDiscovery\MarketplaceDiscoveryClient
{
    use GetListing\GetListingTrait;
    use GetOffer\GetOfferTrait;
    use GetOfferSet\GetOfferSetTrait;
    use GetOfferTerms\GetOfferTermsTrait;
    use GetProduct\GetProductTrait;
    use ListFulfillmentOptions\ListFulfillmentOptionsTrait;
    use ListPurchaseOptions\ListPurchaseOptionsTrait;
    use SearchFacets\SearchFacetsTrait;
    use SearchListings\SearchListingsTrait;
}
