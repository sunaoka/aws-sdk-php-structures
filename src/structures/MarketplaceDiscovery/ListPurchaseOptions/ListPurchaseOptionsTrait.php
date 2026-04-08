<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions;

trait ListPurchaseOptionsTrait
{
    /**
     * @param ListPurchaseOptionsRequest $args
     * @return ListPurchaseOptionsResponse
     */
    public function listPurchaseOptions(ListPurchaseOptionsRequest $args)
    {
        $result = parent::listPurchaseOptions($args->toArray());
        return new ListPurchaseOptionsResponse($result->toArray());
    }
}
