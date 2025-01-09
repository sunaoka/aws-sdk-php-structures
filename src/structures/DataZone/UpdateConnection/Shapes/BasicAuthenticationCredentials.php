<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $password
 * @property string $userName
 */
class BasicAuthenticationCredentials extends Shape
{
    /**
     * @param array{
     *     password?: string,
     *     userName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
