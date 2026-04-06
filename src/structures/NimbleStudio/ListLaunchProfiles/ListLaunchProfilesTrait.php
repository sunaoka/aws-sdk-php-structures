<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListLaunchProfiles;

trait ListLaunchProfilesTrait
{
    /**
     * @param ListLaunchProfilesRequest $args
     * @return ListLaunchProfilesResponse
     */
    public function listLaunchProfiles(ListLaunchProfilesRequest $args)
    {
        $result = parent::listLaunchProfiles($args->toArray());
        return new ListLaunchProfilesResponse($result->toArray());
    }
}
