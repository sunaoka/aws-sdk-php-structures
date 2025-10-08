<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminConfirmSignUp;

trait AdminConfirmSignUpTrait
{
    /**
     * @param AdminConfirmSignUpRequest $args
     * @return AdminConfirmSignUpResponse
     */
    public function adminConfirmSignUp(AdminConfirmSignUpRequest $args)
    {
        $result = parent::adminConfirmSignUp($args->toArray());
        return new AdminConfirmSignUpResponse($result->toArray());
    }
}
