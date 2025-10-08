<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem;

trait GetCatalogItemTrait
{
    /**
     * @param GetCatalogItemRequest $args
     * @return GetCatalogItemResponse
     */
    public function getCatalogItem(GetCatalogItemRequest $args)
    {
        $result = parent::getCatalogItem($args->toArray());
        return new GetCatalogItemResponse($result->toArray());
    }
}
