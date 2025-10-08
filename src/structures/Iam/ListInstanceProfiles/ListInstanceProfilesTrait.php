<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfiles;

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
