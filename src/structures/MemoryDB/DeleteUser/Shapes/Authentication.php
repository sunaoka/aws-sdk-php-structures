<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'no-password'|'iam' $Type
 * @property int $PasswordCount
 */
class Authentication extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'no-password'|'iam',
     *     PasswordCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
