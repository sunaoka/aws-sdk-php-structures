<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StringValues
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{StringValues?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
