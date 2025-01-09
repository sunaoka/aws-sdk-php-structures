<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'no-password-required'|'iam' $Type
 * @property list<string> $Passwords
 */
class AuthenticationMode extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'no-password-required'|'iam',
     *     Passwords?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
