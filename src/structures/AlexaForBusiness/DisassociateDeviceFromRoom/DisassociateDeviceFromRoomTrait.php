<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateDeviceFromRoom;

trait DisassociateDeviceFromRoomTrait
{
    /**
     * @param DisassociateDeviceFromRoomRequest $args
     * @return DisassociateDeviceFromRoomResponse
     */
    public function disassociateDeviceFromRoom(DisassociateDeviceFromRoomRequest $args)
    {
        $result = parent::disassociateDeviceFromRoom($args->toArray());
        return new DisassociateDeviceFromRoomResponse($result->toArray());
    }
}
