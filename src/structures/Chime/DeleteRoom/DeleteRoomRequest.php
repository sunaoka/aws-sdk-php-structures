<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 */
class DeleteRoomRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
