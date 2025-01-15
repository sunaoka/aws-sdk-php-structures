<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PasswordPolicyType|null $PasswordPolicy
 * @property SignInPolicyType|null $SignInPolicy
 */
class UserPoolPolicyType extends Shape
{
    /**
     * @param array{
     *     PasswordPolicy?: PasswordPolicyType|null,
     *     SignInPolicy?: SignInPolicyType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
