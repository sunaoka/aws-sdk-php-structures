<?php

namespace Sunaoka\Aws\Structures\Wickr\GetUsersCount;

trait GetUsersCountTrait
{
    /**
     * @param GetUsersCountRequest $args
     * @return GetUsersCountResponse
     */
    public function getUsersCount(GetUsersCountRequest $args)
    {
        $result = parent::getUsersCount($args->toArray());
        return new GetUsersCountResponse($result->toArray());
    }
}
