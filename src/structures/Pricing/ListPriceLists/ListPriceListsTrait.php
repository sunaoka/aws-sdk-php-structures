<?php

namespace Sunaoka\Aws\Structures\Pricing\ListPriceLists;

trait ListPriceListsTrait
{
    /**
     * @param ListPriceListsRequest $args
     * @return ListPriceListsResponse
     */
    public function listPriceLists(ListPriceListsRequest $args)
    {
        $result = parent::listPriceLists($args->toArray());
        return new ListPriceListsResponse($result->toArray());
    }
}
