<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MemberArn
 */
class Target extends Shape
{
    /**
     * @param array{MemberArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
