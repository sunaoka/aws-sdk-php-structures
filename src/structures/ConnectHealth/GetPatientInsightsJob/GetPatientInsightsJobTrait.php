<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob;

trait GetPatientInsightsJobTrait
{
    /**
     * @param GetPatientInsightsJobRequest $args
     * @return GetPatientInsightsJobResponse
     */
    public function getPatientInsightsJob(GetPatientInsightsJobRequest $args)
    {
        $result = parent::getPatientInsightsJob($args->toArray());
        return new GetPatientInsightsJobResponse($result->toArray());
    }
}
