<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'> $AllowedFirstAuthFactors
 */
class SignInPolicyType extends Shape
{
    /**
     * @param array{AllowedFirstAuthFactors?: list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
