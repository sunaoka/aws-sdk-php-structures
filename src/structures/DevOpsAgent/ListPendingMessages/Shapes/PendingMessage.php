<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property Message $message
 */
class PendingMessage extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     message: Message
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
