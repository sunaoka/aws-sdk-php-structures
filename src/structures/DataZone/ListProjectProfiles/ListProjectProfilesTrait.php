<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles;

trait ListProjectProfilesTrait
{
    /**
     * @param ListProjectProfilesRequest $args
     * @return ListProjectProfilesResponse
     */
    public function listProjectProfiles(ListProjectProfilesRequest $args)
    {
        $result = parent::listProjectProfiles($args->toArray());
        return new ListProjectProfilesResponse($result->toArray());
    }
}
