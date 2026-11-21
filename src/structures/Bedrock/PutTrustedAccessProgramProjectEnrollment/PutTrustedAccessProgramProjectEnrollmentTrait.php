<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutTrustedAccessProgramProjectEnrollment;

trait PutTrustedAccessProgramProjectEnrollmentTrait
{
    /**
     * @param PutTrustedAccessProgramProjectEnrollmentRequest $args
     * @return PutTrustedAccessProgramProjectEnrollmentResponse
     */
    public function putTrustedAccessProgramProjectEnrollment(PutTrustedAccessProgramProjectEnrollmentRequest $args)
    {
        $result = parent::putTrustedAccessProgramProjectEnrollment($args->toArray());
        return new PutTrustedAccessProgramProjectEnrollmentResponse($result->toArray());
    }
}
