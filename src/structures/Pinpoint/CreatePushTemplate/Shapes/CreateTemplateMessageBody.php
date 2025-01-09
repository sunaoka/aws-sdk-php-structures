<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreatePushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Message
 * @property string $RequestID
 */
class CreateTemplateMessageBody extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Message?: string,
     *     RequestID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
