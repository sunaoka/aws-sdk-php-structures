<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $password
 * @property string $username
 */
class UsernamePassword extends Shape
{
    /**
     * @param array{
     *     password: string,
     *     username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
