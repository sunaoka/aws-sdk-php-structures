<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetUserDetails;

trait GetUserDetailsTrait
{
    /**
     * @param GetUserDetailsRequest $args
     * @return GetUserDetailsResponse
     */
    public function getUserDetails(GetUserDetailsRequest $args)
    {
        $result = parent::getUserDetails($args->toArray());
        return new GetUserDetailsResponse($result->toArray());
    }
}
