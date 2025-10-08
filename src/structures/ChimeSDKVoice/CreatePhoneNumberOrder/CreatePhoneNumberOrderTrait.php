<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreatePhoneNumberOrder;

trait CreatePhoneNumberOrderTrait
{
    /**
     * @param CreatePhoneNumberOrderRequest $args
     * @return CreatePhoneNumberOrderResponse
     */
    public function createPhoneNumberOrder(CreatePhoneNumberOrderRequest $args)
    {
        $result = parent::createPhoneNumberOrder($args->toArray());
        return new CreatePhoneNumberOrderResponse($result->toArray());
    }
}
