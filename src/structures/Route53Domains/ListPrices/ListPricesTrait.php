<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices;

trait ListPricesTrait
{
    /**
     * @param ListPricesRequest $args
     * @return ListPricesResponse
     */
    public function listPrices(ListPricesRequest $args)
    {
        $result = parent::listPrices($args->toArray());
        return new ListPricesResponse($result->toArray());
    }
}
