<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers;

trait SearchUsersTrait
{
    /**
     * @param SearchUsersRequest $args
     * @return SearchUsersResponse
     */
    public function searchUsers(SearchUsersRequest $args)
    {
        $result = parent::searchUsers($args->toArray());
        return new SearchUsersResponse($result->toArray());
    }
}
