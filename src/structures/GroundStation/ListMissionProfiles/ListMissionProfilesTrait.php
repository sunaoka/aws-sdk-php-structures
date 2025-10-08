<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListMissionProfiles;

trait ListMissionProfilesTrait
{
    /**
     * @param ListMissionProfilesRequest $args
     * @return ListMissionProfilesResponse
     */
    public function listMissionProfiles(ListMissionProfilesRequest $args)
    {
        $result = parent::listMissionProfiles($args->toArray());
        return new ListMissionProfilesResponse($result->toArray());
    }
}
