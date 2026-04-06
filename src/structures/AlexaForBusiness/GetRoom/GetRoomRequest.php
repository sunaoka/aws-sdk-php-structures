<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RoomArn
 */
class GetRoomRequest extends Request
{
    /**
     * @param array{RoomArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
