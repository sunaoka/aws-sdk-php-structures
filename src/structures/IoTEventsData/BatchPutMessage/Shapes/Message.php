<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $inputName
 * @property string|resource|\Psr\Http\Message\StreamInterface $payload
 * @property TimestampValue|null $timestamp
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     inputName: string,
     *     payload: string|resource|\Psr\Http\Message\StreamInterface,
     *     timestamp?: TimestampValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
