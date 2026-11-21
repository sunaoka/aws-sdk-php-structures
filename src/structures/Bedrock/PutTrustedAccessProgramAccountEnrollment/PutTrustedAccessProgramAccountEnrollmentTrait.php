<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutTrustedAccessProgramAccountEnrollment;

trait PutTrustedAccessProgramAccountEnrollmentTrait
{
    /**
     * @param PutTrustedAccessProgramAccountEnrollmentRequest $args
     * @return PutTrustedAccessProgramAccountEnrollmentResponse
     */
    public function putTrustedAccessProgramAccountEnrollment(PutTrustedAccessProgramAccountEnrollmentRequest $args)
    {
        $result = parent::putTrustedAccessProgramAccountEnrollment($args->toArray());
        return new PutTrustedAccessProgramAccountEnrollmentResponse($result->toArray());
    }
}
