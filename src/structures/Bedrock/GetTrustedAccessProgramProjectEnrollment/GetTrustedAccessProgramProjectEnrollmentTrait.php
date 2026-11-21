<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramProjectEnrollment;

trait GetTrustedAccessProgramProjectEnrollmentTrait
{
    /**
     * @param GetTrustedAccessProgramProjectEnrollmentRequest $args
     * @return GetTrustedAccessProgramProjectEnrollmentResponse
     */
    public function getTrustedAccessProgramProjectEnrollment(GetTrustedAccessProgramProjectEnrollmentRequest $args)
    {
        $result = parent::getTrustedAccessProgramProjectEnrollment($args->toArray());
        return new GetTrustedAccessProgramProjectEnrollmentResponse($result->toArray());
    }
}
