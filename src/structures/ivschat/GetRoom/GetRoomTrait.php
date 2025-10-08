<?php

namespace Sunaoka\Aws\Structures\ivschat\GetRoom;

trait GetRoomTrait
{
    /**
     * @param GetRoomRequest $args
     * @return GetRoomResponse
     */
    public function getRoom(GetRoomRequest $args)
    {
        $result = parent::getRoom($args->toArray());
        return new GetRoomResponse($result->toArray());
    }
}
