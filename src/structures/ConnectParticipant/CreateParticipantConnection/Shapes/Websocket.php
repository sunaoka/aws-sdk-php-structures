<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $ConnectionExpiry
 */
class Websocket extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     ConnectionExpiry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
