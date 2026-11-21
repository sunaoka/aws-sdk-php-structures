<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes;

trait ListListingAttributesTrait
{
    /**
     * @param ListListingAttributesRequest $args
     * @return ListListingAttributesResponse
     */
    public function listListingAttributes(ListListingAttributesRequest $args)
    {
        $result = parent::listListingAttributes($args->toArray());
        return new ListListingAttributesResponse($result->toArray());
    }
}
