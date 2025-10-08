<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails;

trait GetAccountAuthorizationDetailsTrait
{
    /**
     * @param GetAccountAuthorizationDetailsRequest $args
     * @return GetAccountAuthorizationDetailsResponse
     */
    public function getAccountAuthorizationDetails(GetAccountAuthorizationDetailsRequest $args)
    {
        $result = parent::getAccountAuthorizationDetails($args->toArray());
        return new GetAccountAuthorizationDetailsResponse($result->toArray());
    }
}
