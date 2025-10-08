<?php

namespace Sunaoka\Aws\Structures\EKS\ListFargateProfiles;

trait ListFargateProfilesTrait
{
    /**
     * @param ListFargateProfilesRequest $args
     * @return ListFargateProfilesResponse
     */
    public function listFargateProfiles(ListFargateProfilesRequest $args)
    {
        $result = parent::listFargateProfiles($args->toArray());
        return new ListFargateProfilesResponse($result->toArray());
    }
}
