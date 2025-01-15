<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $username
 * @property string|null $password
 */
class RedshiftConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     username?: string|null,
     *     password?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
