<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutTrustedAccessProgramOrganizationEnrollment;

trait PutTrustedAccessProgramOrganizationEnrollmentTrait
{
    /**
     * @param PutTrustedAccessProgramOrganizationEnrollmentRequest $args
     * @return PutTrustedAccessProgramOrganizationEnrollmentResponse
     */
    public function putTrustedAccessProgramOrganizationEnrollment(PutTrustedAccessProgramOrganizationEnrollmentRequest $args)
    {
        $result = parent::putTrustedAccessProgramOrganizationEnrollment($args->toArray());
        return new PutTrustedAccessProgramOrganizationEnrollmentResponse($result->toArray());
    }
}
