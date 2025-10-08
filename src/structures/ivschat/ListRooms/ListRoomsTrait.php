<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms;

trait ListRoomsTrait
{
    /**
     * @param ListRoomsRequest $args
     * @return ListRoomsResponse
     */
    public function listRooms(ListRoomsRequest $args)
    {
        $result = parent::listRooms($args->toArray());
        return new ListRoomsResponse($result->toArray());
    }
}
