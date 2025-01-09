<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'iam' $Type
 * @property list<string> $Passwords
 */
class AuthenticationMode extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'iam',
     *     Passwords?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
