<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userName
 * @property string|null $password
 */
class BasicAuthenticationCredentials extends Shape
{
    /**
     * @param array{
     *     userName?: string|null,
     *     password?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
