<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

trait CreateRoomTrait
{
    /**
     * @param CreateRoomRequest $args
     * @return CreateRoomResponse
     */
    public function createRoom(CreateRoomRequest $args)
    {
        $result = parent::createRoom($args->toArray());
        return new CreateRoomResponse($result->toArray());
    }
}
