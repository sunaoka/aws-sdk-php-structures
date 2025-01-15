<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateVoiceTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Message
 * @property string|null $RequestID
 */
class CreateTemplateMessageBody extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Message?: string|null,
     *     RequestID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
