<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'password'|'no-password'|'iam'|null $Type
 * @property int|null $PasswordCount
 */
class Authentication extends Shape
{
    /**
     * @param array{
     *     Type?: 'password'|'no-password'|'iam'|null,
     *     PasswordCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
