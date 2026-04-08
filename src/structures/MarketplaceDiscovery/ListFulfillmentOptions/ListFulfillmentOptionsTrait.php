<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions;

trait ListFulfillmentOptionsTrait
{
    /**
     * @param ListFulfillmentOptionsRequest $args
     * @return ListFulfillmentOptionsResponse
     */
    public function listFulfillmentOptions(ListFulfillmentOptionsRequest $args)
    {
        $result = parent::listFulfillmentOptions($args->toArray());
        return new ListFulfillmentOptionsResponse($result->toArray());
    }
}
