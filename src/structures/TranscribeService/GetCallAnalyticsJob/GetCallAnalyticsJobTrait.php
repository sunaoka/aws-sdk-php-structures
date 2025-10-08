<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsJob;

trait GetCallAnalyticsJobTrait
{
    /**
     * @param GetCallAnalyticsJobRequest $args
     * @return GetCallAnalyticsJobResponse
     */
    public function getCallAnalyticsJob(GetCallAnalyticsJobRequest $args)
    {
        $result = parent::getCallAnalyticsJob($args->toArray());
        return new GetCallAnalyticsJobResponse($result->toArray());
    }
}
