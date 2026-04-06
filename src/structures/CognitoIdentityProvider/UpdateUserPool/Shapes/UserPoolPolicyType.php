<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PasswordPolicyType|null $PasswordPolicy
 */
class UserPoolPolicyType extends Shape
{
    /**
     * @param array{PasswordPolicy?: PasswordPolicyType|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
