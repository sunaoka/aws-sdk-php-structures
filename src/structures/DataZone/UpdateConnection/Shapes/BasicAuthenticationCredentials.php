<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $password
 * @property string|null $userName
 */
class BasicAuthenticationCredentials extends Shape
{
    /**
     * @param array{
     *     password?: string|null,
     *     userName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
