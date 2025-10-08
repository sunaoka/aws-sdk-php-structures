<?php

namespace Sunaoka\Aws\Structures\Iot\PutVerificationStateOnViolation;

trait PutVerificationStateOnViolationTrait
{
    /**
     * @param PutVerificationStateOnViolationRequest $args
     * @return PutVerificationStateOnViolationResponse
     */
    public function putVerificationStateOnViolation(PutVerificationStateOnViolationRequest $args)
    {
        $result = parent::putVerificationStateOnViolation($args->toArray());
        return new PutVerificationStateOnViolationResponse($result->toArray());
    }
}
