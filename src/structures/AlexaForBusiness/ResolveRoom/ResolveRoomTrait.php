<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ResolveRoom;

trait ResolveRoomTrait
{
    /**
     * @param ResolveRoomRequest $args
     * @return ResolveRoomResponse
     */
    public function resolveRoom(ResolveRoomRequest $args)
    {
        $result = parent::resolveRoom($args->toArray());
        return new ResolveRoomResponse($result->toArray());
    }
}
