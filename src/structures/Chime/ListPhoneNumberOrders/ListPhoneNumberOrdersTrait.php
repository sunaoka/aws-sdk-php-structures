<?php

namespace Sunaoka\Aws\Structures\Chime\ListPhoneNumberOrders;

trait ListPhoneNumberOrdersTrait
{
    /**
     * @param ListPhoneNumberOrdersRequest $args
     * @return ListPhoneNumberOrdersResponse
     */
    public function listPhoneNumberOrders(ListPhoneNumberOrdersRequest $args)
    {
        $result = parent::listPhoneNumberOrders($args->toArray());
        return new ListPhoneNumberOrdersResponse($result->toArray());
    }
}
