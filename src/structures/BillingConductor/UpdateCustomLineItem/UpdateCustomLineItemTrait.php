<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem;

trait UpdateCustomLineItemTrait
{
    /**
     * @param UpdateCustomLineItemRequest $args
     * @return UpdateCustomLineItemResponse
     */
    public function updateCustomLineItem(UpdateCustomLineItemRequest $args)
    {
        $result = parent::updateCustomLineItem($args->toArray());
        return new UpdateCustomLineItemResponse($result->toArray());
    }
}
