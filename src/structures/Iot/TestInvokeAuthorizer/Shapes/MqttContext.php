<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string|resource|\Psr\Http\Message\StreamInterface $password
 * @property string $clientId
 */
class MqttContext extends Shape
{
    /**
     * @param array{
     *     username?: string,
     *     password?: string|resource|\Psr\Http\Message\StreamInterface,
     *     clientId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
