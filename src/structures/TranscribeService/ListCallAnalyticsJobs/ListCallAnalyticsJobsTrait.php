<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsJobs;

trait ListCallAnalyticsJobsTrait
{
    /**
     * @param ListCallAnalyticsJobsRequest $args
     * @return ListCallAnalyticsJobsResponse
     */
    public function listCallAnalyticsJobs(ListCallAnalyticsJobsRequest $args)
    {
        $result = parent::listCallAnalyticsJobs($args->toArray());
        return new ListCallAnalyticsJobsResponse($result->toArray());
    }
}
