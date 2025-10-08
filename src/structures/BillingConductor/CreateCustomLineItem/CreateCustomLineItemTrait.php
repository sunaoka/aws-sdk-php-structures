<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem;

trait CreateCustomLineItemTrait
{
    /**
     * @param CreateCustomLineItemRequest $args
     * @return CreateCustomLineItemResponse
     */
    public function createCustomLineItem(CreateCustomLineItemRequest $args)
    {
        $result = parent::createCustomLineItem($args->toArray());
        return new CreateCustomLineItemResponse($result->toArray());
    }
}
