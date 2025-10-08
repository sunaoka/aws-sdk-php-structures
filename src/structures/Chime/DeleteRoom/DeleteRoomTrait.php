<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteRoom;

trait DeleteRoomTrait
{
    /**
     * @param DeleteRoomRequest $args
     * @return void
     */
    public function deleteRoom(DeleteRoomRequest $args)
    {
        parent::deleteRoom($args->toArray());
    }
}
