<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchFacets;

trait SearchFacetsTrait
{
    /**
     * @param SearchFacetsRequest $args
     * @return SearchFacetsResponse
     */
    public function searchFacets(SearchFacetsRequest $args)
    {
        $result = parent::searchFacets($args->toArray());
        return new SearchFacetsResponse($result->toArray());
    }
}
