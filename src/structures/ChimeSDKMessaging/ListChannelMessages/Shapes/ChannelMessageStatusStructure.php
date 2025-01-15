<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SENT'|'PENDING'|'FAILED'|'DENIED'|null $Value
 * @property string|null $Detail
 */
class ChannelMessageStatusStructure extends Shape
{
    /**
     * @param array{
     *     Value?: 'SENT'|'PENDING'|'FAILED'|'DENIED'|null,
     *     Detail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
