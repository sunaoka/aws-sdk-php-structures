<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'no-password-required'|'iam'|null $Type
 * @property list<string>|null $Passwords
 */
class AuthenticationMode extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'no-password-required'|'iam'|null,
     *     Passwords?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
