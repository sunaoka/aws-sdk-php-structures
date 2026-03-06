<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob;

trait StartPatientInsightsJobTrait
{
    /**
     * @param StartPatientInsightsJobRequest $args
     * @return StartPatientInsightsJobResponse
     */
    public function startPatientInsightsJob(StartPatientInsightsJobRequest $args)
    {
        $result = parent::startPatientInsightsJob($args->toArray());
        return new StartPatientInsightsJobResponse($result->toArray());
    }
}
