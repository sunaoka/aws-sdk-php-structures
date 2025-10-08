<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrders;

trait ListOrdersTrait
{
    /**
     * @param ListOrdersRequest $args
     * @return ListOrdersResponse
     */
    public function listOrders(ListOrdersRequest $args)
    {
        $result = parent::listOrders($args->toArray());
        return new ListOrdersResponse($result->toArray());
    }
}
