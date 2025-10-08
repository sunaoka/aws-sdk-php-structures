<?php

namespace Sunaoka\Aws\Structures\Outposts\CancelOrder;

trait CancelOrderTrait
{
    /**
     * @param CancelOrderRequest $args
     * @return CancelOrderResponse
     */
    public function cancelOrder(CancelOrderRequest $args)
    {
        $result = parent::cancelOrder($args->toArray());
        return new CancelOrderResponse($result->toArray());
    }
}
