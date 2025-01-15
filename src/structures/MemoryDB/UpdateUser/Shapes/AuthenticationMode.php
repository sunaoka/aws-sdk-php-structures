<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'iam'|null $Type
 * @property list<string>|null $Passwords
 */
class AuthenticationMode extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'iam'|null,
     *     Passwords?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
