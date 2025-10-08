<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchDisassociateResourcesFromCustomLineItem;

trait BatchDisassociateResourcesFromCustomLineItemTrait
{
    /**
     * @param BatchDisassociateResourcesFromCustomLineItemRequest $args
     * @return BatchDisassociateResourcesFromCustomLineItemResponse
     */
    public function batchDisassociateResourcesFromCustomLineItem(BatchDisassociateResourcesFromCustomLineItemRequest $args)
    {
        $result = parent::batchDisassociateResourcesFromCustomLineItem($args->toArray());
        return new BatchDisassociateResourcesFromCustomLineItemResponse($result->toArray());
    }
}
