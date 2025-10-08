<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfiles;

trait ListSecurityProfilesTrait
{
    /**
     * @param ListSecurityProfilesRequest $args
     * @return ListSecurityProfilesResponse
     */
    public function listSecurityProfiles(ListSecurityProfilesRequest $args)
    {
        $result = parent::listSecurityProfiles($args->toArray());
        return new ListSecurityProfilesResponse($result->toArray());
    }
}
