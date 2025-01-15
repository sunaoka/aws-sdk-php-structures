<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingSessionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 */
class MessagingSessionEndpoint extends Shape
{
    /**
     * @param array{Url?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
