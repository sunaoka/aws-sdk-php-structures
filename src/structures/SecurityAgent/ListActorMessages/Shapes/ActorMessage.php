<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListActorMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sender
 * @property string|null $subject
 * @property string|null $body
 * @property \Aws\Api\DateTimeResult|null $receivedAt
 */
class ActorMessage extends Shape
{
    /**
     * @param array{
     *     sender?: string|null,
     *     subject?: string|null,
     *     body?: string|null,
     *     receivedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
