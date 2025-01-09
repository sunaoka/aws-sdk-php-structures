<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $payload
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     payload: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
