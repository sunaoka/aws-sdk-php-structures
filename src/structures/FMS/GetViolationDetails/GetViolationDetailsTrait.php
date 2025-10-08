<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails;

trait GetViolationDetailsTrait
{
    /**
     * @param GetViolationDetailsRequest $args
     * @return GetViolationDetailsResponse
     */
    public function getViolationDetails(GetViolationDetailsRequest $args)
    {
        $result = parent::getViolationDetails($args->toArray());
        return new GetViolationDetailsResponse($result->toArray());
    }
}
