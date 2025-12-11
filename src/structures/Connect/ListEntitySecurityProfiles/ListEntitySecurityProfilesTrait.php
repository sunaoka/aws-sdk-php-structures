<?php

namespace Sunaoka\Aws\Structures\Connect\ListEntitySecurityProfiles;

trait ListEntitySecurityProfilesTrait
{
    /**
     * @param ListEntitySecurityProfilesRequest $args
     * @return ListEntitySecurityProfilesResponse
     */
    public function listEntitySecurityProfiles(ListEntitySecurityProfilesRequest $args)
    {
        $result = parent::listEntitySecurityProfiles($args->toArray());
        return new ListEntitySecurityProfilesResponse($result->toArray());
    }
}
