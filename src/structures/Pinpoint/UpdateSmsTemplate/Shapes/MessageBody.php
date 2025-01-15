<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $RequestID
 */
class MessageBody extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     RequestID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
