<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'|'SOFTWARE_TOKEN'>|null $AllowedFirstAuthFactors
 */
class SignInPolicyType extends Shape
{
    /**
     * @param array{AllowedFirstAuthFactors?: list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'|'SOFTWARE_TOKEN'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
