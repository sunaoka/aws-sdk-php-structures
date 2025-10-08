<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem;

trait ListResourcesAssociatedToCustomLineItemTrait
{
    /**
     * @param ListResourcesAssociatedToCustomLineItemRequest $args
     * @return ListResourcesAssociatedToCustomLineItemResponse
     */
    public function listResourcesAssociatedToCustomLineItem(ListResourcesAssociatedToCustomLineItemRequest $args)
    {
        $result = parent::listResourcesAssociatedToCustomLineItem($args->toArray());
        return new ListResourcesAssociatedToCustomLineItemResponse($result->toArray());
    }
}
