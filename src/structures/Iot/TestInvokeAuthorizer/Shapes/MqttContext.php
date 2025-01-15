<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $username
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $password
 * @property string|null $clientId
 */
class MqttContext extends Shape
{
    /**
     * @param array{
     *     username?: string|null,
     *     password?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     clientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
