<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails;

trait GetServiceLastAccessedDetailsTrait
{
    /**
     * @param GetServiceLastAccessedDetailsRequest $args
     * @return GetServiceLastAccessedDetailsResponse
     */
    public function getServiceLastAccessedDetails(GetServiceLastAccessedDetailsRequest $args)
    {
        $result = parent::getServiceLastAccessedDetails($args->toArray());
        return new GetServiceLastAccessedDetailsResponse($result->toArray());
    }
}
