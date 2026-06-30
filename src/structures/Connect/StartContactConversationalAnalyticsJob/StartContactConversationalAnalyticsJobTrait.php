<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob;

trait StartContactConversationalAnalyticsJobTrait
{
    /**
     * @param StartContactConversationalAnalyticsJobRequest $args
     * @return StartContactConversationalAnalyticsJobResponse
     */
    public function startContactConversationalAnalyticsJob(StartContactConversationalAnalyticsJobRequest $args)
    {
        $result = parent::startContactConversationalAnalyticsJob($args->toArray());
        return new StartContactConversationalAnalyticsJobResponse($result->toArray());
    }
}
