<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder;

trait GetOrderTrait
{
    /**
     * @param GetOrderRequest $args
     * @return GetOrderResponse
     */
    public function getOrder(GetOrderRequest $args)
    {
        $result = parent::getOrder($args->toArray());
        return new GetOrderResponse($result->toArray());
    }
}
