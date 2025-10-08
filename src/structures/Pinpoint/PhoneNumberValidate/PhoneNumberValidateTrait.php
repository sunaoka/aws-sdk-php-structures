<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate;

trait PhoneNumberValidateTrait
{
    /**
     * @param PhoneNumberValidateRequest $args
     * @return PhoneNumberValidateResponse
     */
    public function phoneNumberValidate(PhoneNumberValidateRequest $args)
    {
        $result = parent::phoneNumberValidate($args->toArray());
        return new PhoneNumberValidateResponse($result->toArray());
    }
}
