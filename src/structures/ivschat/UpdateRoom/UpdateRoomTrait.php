<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

trait UpdateRoomTrait
{
    /**
     * @param UpdateRoomRequest $args
     * @return UpdateRoomResponse
     */
    public function updateRoom(UpdateRoomRequest $args)
    {
        $result = parent::updateRoom($args->toArray());
        return new UpdateRoomResponse($result->toArray());
    }
}
