<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string|null $password
 * @property string|null $privateKey
 */
class SnowflakeConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     username: string,
     *     password?: string|null,
     *     privateKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
