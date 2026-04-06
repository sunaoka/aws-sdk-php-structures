<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchRooms;

trait SearchRoomsTrait
{
    /**
     * @param SearchRoomsRequest $args
     * @return SearchRoomsResponse
     */
    public function searchRooms(SearchRoomsRequest $args)
    {
        $result = parent::searchRooms($args->toArray());
        return new SearchRoomsResponse($result->toArray());
    }
}
