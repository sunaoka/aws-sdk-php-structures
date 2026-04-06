<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateDeviceWithRoom;

trait AssociateDeviceWithRoomTrait
{
    /**
     * @param AssociateDeviceWithRoomRequest $args
     * @return AssociateDeviceWithRoomResponse
     */
    public function associateDeviceWithRoom(AssociateDeviceWithRoomRequest $args)
    {
        $result = parent::associateDeviceWithRoom($args->toArray());
        return new AssociateDeviceWithRoomResponse($result->toArray());
    }
}
