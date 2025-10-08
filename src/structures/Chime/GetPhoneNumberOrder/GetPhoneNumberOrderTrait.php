<?php

namespace Sunaoka\Aws\Structures\Chime\GetPhoneNumberOrder;

trait GetPhoneNumberOrderTrait
{
    /**
     * @param GetPhoneNumberOrderRequest $args
     * @return GetPhoneNumberOrderResponse
     */
    public function getPhoneNumberOrder(GetPhoneNumberOrderRequest $args)
    {
        $result = parent::getPhoneNumberOrder($args->toArray());
        return new GetPhoneNumberOrderResponse($result->toArray());
    }
}
