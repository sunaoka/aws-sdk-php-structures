<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMessageStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SENT'|'PENDING'|'FAILED'|'DENIED' $Value
 * @property string $Detail
 */
class ChannelMessageStatusStructure extends Shape
{
    /**
     * @param array{
     *     Value?: 'SENT'|'PENDING'|'FAILED'|'DENIED',
     *     Detail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
