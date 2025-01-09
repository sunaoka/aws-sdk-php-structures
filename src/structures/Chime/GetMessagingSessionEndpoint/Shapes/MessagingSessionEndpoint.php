<?php

namespace Sunaoka\Aws\Structures\Chime\GetMessagingSessionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 */
class MessagingSessionEndpoint extends Shape
{
    /**
     * @param array{Url?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
