<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob;

trait StartFraudsterRegistrationJobTrait
{
    /**
     * @param StartFraudsterRegistrationJobRequest $args
     * @return StartFraudsterRegistrationJobResponse
     */
    public function startFraudsterRegistrationJob(StartFraudsterRegistrationJobRequest $args)
    {
        $result = parent::startFraudsterRegistrationJob($args->toArray());
        return new StartFraudsterRegistrationJobResponse($result->toArray());
    }
}
