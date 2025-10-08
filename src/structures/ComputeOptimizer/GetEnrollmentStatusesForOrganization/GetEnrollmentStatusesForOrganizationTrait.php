<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization;

trait GetEnrollmentStatusesForOrganizationTrait
{
    /**
     * @param GetEnrollmentStatusesForOrganizationRequest $args
     * @return GetEnrollmentStatusesForOrganizationResponse
     */
    public function getEnrollmentStatusesForOrganization(GetEnrollmentStatusesForOrganizationRequest $args)
    {
        $result = parent::getEnrollmentStatusesForOrganization($args->toArray());
        return new GetEnrollmentStatusesForOrganizationResponse($result->toArray());
    }
}
