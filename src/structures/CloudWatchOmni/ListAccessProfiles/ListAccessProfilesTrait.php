<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessProfiles;

trait ListAccessProfilesTrait
{
    /**
     * @param ListAccessProfilesRequest $args
     * @return ListAccessProfilesResponse
     */
    public function listAccessProfiles(ListAccessProfilesRequest $args)
    {
        $result = parent::listAccessProfiles($args->toArray());
        return new ListAccessProfilesResponse($result->toArray());
    }
}
