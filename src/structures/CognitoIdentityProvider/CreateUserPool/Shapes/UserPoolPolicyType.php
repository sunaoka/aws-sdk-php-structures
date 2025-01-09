<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PasswordPolicyType $PasswordPolicy
 * @property SignInPolicyType $SignInPolicy
 */
class UserPoolPolicyType extends Shape
{
    /**
     * @param array{
     *     PasswordPolicy?: PasswordPolicyType,
     *     SignInPolicy?: SignInPolicyType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
