<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfiles;

trait ListRoutingProfilesTrait
{
    /**
     * @param ListRoutingProfilesRequest $args
     * @return ListRoutingProfilesResponse
     */
    public function listRoutingProfiles(ListRoutingProfilesRequest $args)
    {
        $result = parent::listRoutingProfiles($args->toArray());
        return new ListRoutingProfilesResponse($result->toArray());
    }
}
