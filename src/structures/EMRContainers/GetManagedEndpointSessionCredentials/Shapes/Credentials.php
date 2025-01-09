<?php

namespace Sunaoka\Aws\Structures\EMRContainers\GetManagedEndpointSessionCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $token
 */
class Credentials extends Shape
{
    /**
     * @param array{token?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
