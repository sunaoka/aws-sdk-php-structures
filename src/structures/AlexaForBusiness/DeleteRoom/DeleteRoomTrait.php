<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteRoom;

trait DeleteRoomTrait
{
    /**
     * @param DeleteRoomRequest $args
     * @return DeleteRoomResponse
     */
    public function deleteRoom(DeleteRoomRequest $args)
    {
        $result = parent::deleteRoom($args->toArray());
        return new DeleteRoomResponse($result->toArray());
    }
}
