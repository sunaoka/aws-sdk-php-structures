<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string $password
 */
class BasicAuthCredentials extends Shape
{
    /**
     * @param array{
     *     username: string,
     *     password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
