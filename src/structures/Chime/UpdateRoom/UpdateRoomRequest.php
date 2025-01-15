<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property string|null $Name
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
