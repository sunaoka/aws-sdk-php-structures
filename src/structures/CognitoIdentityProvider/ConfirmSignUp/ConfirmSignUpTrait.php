<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmSignUp;

trait ConfirmSignUpTrait
{
    /**
     * @param ConfirmSignUpRequest $args
     * @return ConfirmSignUpResponse
     */
    public function confirmSignUp(ConfirmSignUpRequest $args)
    {
        $result = parent::confirmSignUp($args->toArray());
        return new ConfirmSignUpResponse($result->toArray());
    }
}
