<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeFraudsterRegistrationJob;

trait DescribeFraudsterRegistrationJobTrait
{
    /**
     * @param DescribeFraudsterRegistrationJobRequest $args
     * @return DescribeFraudsterRegistrationJobResponse
     */
    public function describeFraudsterRegistrationJob(DescribeFraudsterRegistrationJobRequest $args)
    {
        $result = parent::describeFraudsterRegistrationJob($args->toArray());
        return new DescribeFraudsterRegistrationJobResponse($result->toArray());
    }
}
