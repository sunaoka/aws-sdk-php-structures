<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob;

trait StartCallAnalyticsJobTrait
{
    /**
     * @param StartCallAnalyticsJobRequest $args
     * @return StartCallAnalyticsJobResponse
     */
    public function startCallAnalyticsJob(StartCallAnalyticsJobRequest $args)
    {
        $result = parent::startCallAnalyticsJob($args->toArray());
        return new StartCallAnalyticsJobResponse($result->toArray());
    }
}
