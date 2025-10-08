<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteRoom;

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
