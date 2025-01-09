<?php

namespace Sunaoka\Aws\Structures\Chime\RedactRoomMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property string $MessageId
 */
class RedactRoomMessageRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MessageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
