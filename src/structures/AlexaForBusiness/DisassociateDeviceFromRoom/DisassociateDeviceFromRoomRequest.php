<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateDeviceFromRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceArn
 */
class DisassociateDeviceFromRoomRequest extends Request
{
    /**
     * @param array{DeviceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
