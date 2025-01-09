<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $RequestID
 */
class MessageBody extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     RequestID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
