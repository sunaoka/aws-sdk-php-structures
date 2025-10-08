<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SignUp;

trait SignUpTrait
{
    /**
     * @param SignUpRequest $args
     * @return SignUpResponse
     */
    public function signUp(SignUpRequest $args)
    {
        $result = parent::signUp($args->toArray());
        return new SignUpResponse($result->toArray());
    }
}
