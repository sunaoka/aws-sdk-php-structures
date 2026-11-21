<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramAccountEnrollment;

trait GetTrustedAccessProgramAccountEnrollmentTrait
{
    /**
     * @param GetTrustedAccessProgramAccountEnrollmentRequest $args
     * @return GetTrustedAccessProgramAccountEnrollmentResponse
     */
    public function getTrustedAccessProgramAccountEnrollment(GetTrustedAccessProgramAccountEnrollmentRequest $args)
    {
        $result = parent::getTrustedAccessProgramAccountEnrollment($args->toArray());
        return new GetTrustedAccessProgramAccountEnrollmentResponse($result->toArray());
    }
}
