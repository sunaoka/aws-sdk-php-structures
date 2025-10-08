<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListInstanceProfiles;

trait ListInstanceProfilesTrait
{
    /**
     * @param ListInstanceProfilesRequest $args
     * @return ListInstanceProfilesResponse
     */
    public function listInstanceProfiles(ListInstanceProfilesRequest $args)
    {
        $result = parent::listInstanceProfiles($args->toArray());
        return new ListInstanceProfilesResponse($result->toArray());
    }
}
