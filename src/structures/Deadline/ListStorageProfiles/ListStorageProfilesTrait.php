<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfiles;

trait ListStorageProfilesTrait
{
    /**
     * @param ListStorageProfilesRequest $args
     * @return ListStorageProfilesResponse
     */
    public function listStorageProfiles(ListStorageProfilesRequest $args)
    {
        $result = parent::listStorageProfiles($args->toArray());
        return new ListStorageProfilesResponse($result->toArray());
    }
}
