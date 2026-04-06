<?php

namespace Sunaoka\Aws\Structures\Connect\ListAuthenticationProfiles;

trait ListAuthenticationProfilesTrait
{
    /**
     * @param ListAuthenticationProfilesRequest $args
     * @return ListAuthenticationProfilesResponse
     */
    public function listAuthenticationProfiles(ListAuthenticationProfilesRequest $args)
    {
        $result = parent::listAuthenticationProfiles($args->toArray());
        return new ListAuthenticationProfilesResponse($result->toArray());
    }
}
