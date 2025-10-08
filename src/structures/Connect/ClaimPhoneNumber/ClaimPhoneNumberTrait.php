<?php

namespace Sunaoka\Aws\Structures\Connect\ClaimPhoneNumber;

trait ClaimPhoneNumberTrait
{
    /**
     * @param ClaimPhoneNumberRequest $args
     * @return ClaimPhoneNumberResponse
     */
    public function claimPhoneNumber(ClaimPhoneNumberRequest $args)
    {
        $result = parent::claimPhoneNumber($args->toArray());
        return new ClaimPhoneNumberResponse($result->toArray());
    }
}
