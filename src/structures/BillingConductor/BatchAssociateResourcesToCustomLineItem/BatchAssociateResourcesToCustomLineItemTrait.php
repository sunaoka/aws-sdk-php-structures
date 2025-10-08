<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchAssociateResourcesToCustomLineItem;

trait BatchAssociateResourcesToCustomLineItemTrait
{
    /**
     * @param BatchAssociateResourcesToCustomLineItemRequest $args
     * @return BatchAssociateResourcesToCustomLineItemResponse
     */
    public function batchAssociateResourcesToCustomLineItem(BatchAssociateResourcesToCustomLineItemRequest $args)
    {
        $result = parent::batchAssociateResourcesToCustomLineItem($args->toArray());
        return new BatchAssociateResourcesToCustomLineItemResponse($result->toArray());
    }
}
