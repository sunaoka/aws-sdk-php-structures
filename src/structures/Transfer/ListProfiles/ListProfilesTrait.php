<?php

namespace Sunaoka\Aws\Structures\Transfer\ListProfiles;

trait ListProfilesTrait
{
    /**
     * @param ListProfilesRequest $args
     * @return ListProfilesResponse
     */
    public function listProfiles(ListProfilesRequest $args)
    {
        $result = parent::listProfiles($args->toArray());
        return new ListProfilesResponse($result->toArray());
    }
}
