<?php

namespace Sunaoka\Aws\Structures\Sns\OptInPhoneNumber;

trait OptInPhoneNumberTrait
{
    /**
     * @param OptInPhoneNumberRequest $args
     * @return OptInPhoneNumberResponse
     */
    public function optInPhoneNumber(OptInPhoneNumberRequest $args)
    {
        $result = parent::optInPhoneNumber($args->toArray());
        return new OptInPhoneNumberResponse($result->toArray());
    }
}
