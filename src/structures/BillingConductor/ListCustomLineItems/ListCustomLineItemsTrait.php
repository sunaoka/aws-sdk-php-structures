<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems;

trait ListCustomLineItemsTrait
{
    /**
     * @param ListCustomLineItemsRequest $args
     * @return ListCustomLineItemsResponse
     */
    public function listCustomLineItems(ListCustomLineItemsRequest $args)
    {
        $result = parent::listCustomLineItems($args->toArray());
        return new ListCustomLineItemsResponse($result->toArray());
    }
}
