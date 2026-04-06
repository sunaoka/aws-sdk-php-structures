<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateDeviceWithRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceArn
 * @property string|null $RoomArn
 */
class AssociateDeviceWithRoomRequest extends Request
{
    /**
     * @param array{
     *     DeviceArn?: string|null,
     *     RoomArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
