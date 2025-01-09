<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $inputName
 * @property string $payload
 * @property TimestampValue $timestamp
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     inputName: string,
     *     payload: string,
     *     timestamp?: TimestampValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
