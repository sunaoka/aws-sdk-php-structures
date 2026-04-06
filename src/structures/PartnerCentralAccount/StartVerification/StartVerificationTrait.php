<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification;

trait StartVerificationTrait
{
    /**
     * @param StartVerificationRequest $args
     * @return StartVerificationResponse
     */
    public function startVerification(StartVerificationRequest $args)
    {
        $result = parent::startVerification($args->toArray());
        return new StartVerificationResponse($result->toArray());
    }
}
