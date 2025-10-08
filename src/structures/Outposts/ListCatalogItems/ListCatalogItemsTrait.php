<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCatalogItems;

trait ListCatalogItemsTrait
{
    /**
     * @param ListCatalogItemsRequest $args
     * @return ListCatalogItemsResponse
     */
    public function listCatalogItems(ListCatalogItemsRequest $args)
    {
        $result = parent::listCatalogItems($args->toArray());
        return new ListCatalogItemsResponse($result->toArray());
    }
}
