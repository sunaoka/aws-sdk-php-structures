<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string|resource|\Psr\Http\Message\StreamInterface $payload
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     payload: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
