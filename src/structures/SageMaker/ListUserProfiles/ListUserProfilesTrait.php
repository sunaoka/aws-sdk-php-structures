<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUserProfiles;

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
