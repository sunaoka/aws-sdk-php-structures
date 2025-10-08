<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ResendConfirmationCode;

trait ResendConfirmationCodeTrait
{
    /**
     * @param ResendConfirmationCodeRequest $args
     * @return ResendConfirmationCodeResponse
     */
    public function resendConfirmationCode(ResendConfirmationCodeRequest $args)
    {
        $result = parent::resendConfirmationCode($args->toArray());
        return new ResendConfirmationCodeResponse($result->toArray());
    }
}
