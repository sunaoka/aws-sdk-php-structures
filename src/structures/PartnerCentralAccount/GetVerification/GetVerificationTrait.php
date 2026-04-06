<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetVerification;

trait GetVerificationTrait
{
    /**
     * @param GetVerificationRequest $args
     * @return GetVerificationResponse
     */
    public function getVerification(GetVerificationRequest $args)
    {
        $result = parent::getVerification($args->toArray());
        return new GetVerificationResponse($result->toArray());
    }
}
