<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeleteCustomLineItem;

trait DeleteCustomLineItemTrait
{
    /**
     * @param DeleteCustomLineItemRequest $args
     * @return DeleteCustomLineItemResponse
     */
    public function deleteCustomLineItem(DeleteCustomLineItemRequest $args)
    {
        $result = parent::deleteCustomLineItem($args->toArray());
        return new DeleteCustomLineItemResponse($result->toArray());
    }
}
