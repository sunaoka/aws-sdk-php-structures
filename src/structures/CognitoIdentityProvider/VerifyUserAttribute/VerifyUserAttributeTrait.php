<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\VerifyUserAttribute;

trait VerifyUserAttributeTrait
{
    /**
     * @param VerifyUserAttributeRequest $args
     * @return VerifyUserAttributeResponse
     */
    public function verifyUserAttribute(VerifyUserAttributeRequest $args)
    {
        $result = parent::verifyUserAttribute($args->toArray());
        return new VerifyUserAttributeResponse($result->toArray());
    }
}
