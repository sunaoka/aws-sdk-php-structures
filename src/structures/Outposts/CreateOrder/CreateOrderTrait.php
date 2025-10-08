<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder;

trait CreateOrderTrait
{
    /**
     * @param CreateOrderRequest $args
     * @return CreateOrderResponse
     */
    public function createOrder(CreateOrderRequest $args)
    {
        $result = parent::createOrder($args->toArray());
        return new CreateOrderResponse($result->toArray());
    }
}
