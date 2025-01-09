<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $ConnectionExpiry
 */
class Websocket extends Shape
{
    /**
     * @param array{
     *     Url?: string,
     *     ConnectionExpiry?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
