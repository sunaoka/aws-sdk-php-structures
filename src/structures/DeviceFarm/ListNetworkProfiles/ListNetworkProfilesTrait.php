<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListNetworkProfiles;

trait ListNetworkProfilesTrait
{
    /**
     * @param ListNetworkProfilesRequest $args
     * @return ListNetworkProfilesResponse
     */
    public function listNetworkProfiles(ListNetworkProfilesRequest $args)
    {
        $result = parent::listNetworkProfiles($args->toArray());
        return new ListNetworkProfilesResponse($result->toArray());
    }
}
