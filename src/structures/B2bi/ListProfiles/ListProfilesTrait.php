<?php

namespace Sunaoka\Aws\Structures\B2bi\ListProfiles;

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
