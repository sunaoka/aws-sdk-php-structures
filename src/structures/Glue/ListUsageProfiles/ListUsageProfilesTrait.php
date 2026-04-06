<?php

namespace Sunaoka\Aws\Structures\Glue\ListUsageProfiles;

trait ListUsageProfilesTrait
{
    /**
     * @param ListUsageProfilesRequest $args
     * @return ListUsageProfilesResponse
     */
    public function listUsageProfiles(ListUsageProfilesRequest $args)
    {
        $result = parent::listUsageProfiles($args->toArray());
        return new ListUsageProfilesResponse($result->toArray());
    }
}
