<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramOrganizationEnrollment;

trait GetTrustedAccessProgramOrganizationEnrollmentTrait
{
    /**
     * @param GetTrustedAccessProgramOrganizationEnrollmentRequest $args
     * @return GetTrustedAccessProgramOrganizationEnrollmentResponse
     */
    public function getTrustedAccessProgramOrganizationEnrollment(GetTrustedAccessProgramOrganizationEnrollmentRequest $args)
    {
        $result = parent::getTrustedAccessProgramOrganizationEnrollment($args->toArray());
        return new GetTrustedAccessProgramOrganizationEnrollmentResponse($result->toArray());
    }
}
