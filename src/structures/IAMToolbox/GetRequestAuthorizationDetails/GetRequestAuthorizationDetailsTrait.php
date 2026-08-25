<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails;

trait GetRequestAuthorizationDetailsTrait
{
    /**
     * @param GetRequestAuthorizationDetailsRequest $args
     * @return GetRequestAuthorizationDetailsResponse
     */
    public function getRequestAuthorizationDetails(GetRequestAuthorizationDetailsRequest $args)
    {
        $result = parent::getRequestAuthorizationDetails($args->toArray());
        return new GetRequestAuthorizationDetailsResponse($result->toArray());
    }
}
