<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles;

trait ListEnvironmentProfilesTrait
{
    /**
     * @param ListEnvironmentProfilesRequest $args
     * @return ListEnvironmentProfilesResponse
     */
    public function listEnvironmentProfiles(ListEnvironmentProfilesRequest $args)
    {
        $result = parent::listEnvironmentProfiles($args->toArray());
        return new ListEnvironmentProfilesResponse($result->toArray());
    }
}
