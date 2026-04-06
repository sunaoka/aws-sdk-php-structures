<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListUserProfiles;

trait ListUserProfilesTrait
{
    /**
     * @param ListUserProfilesRequest $args
     * @return ListUserProfilesResponse
     */
    public function listUserProfiles(ListUserProfilesRequest $args)
    {
        $result = parent::listUserProfiles($args->toArray());
        return new ListUserProfilesResponse($result->toArray());
    }
}
