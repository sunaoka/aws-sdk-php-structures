<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteCallAnalyticsJob;

trait DeleteCallAnalyticsJobTrait
{
    /**
     * @param DeleteCallAnalyticsJobRequest $args
     * @return DeleteCallAnalyticsJobResponse
     */
    public function deleteCallAnalyticsJob(DeleteCallAnalyticsJobRequest $args)
    {
        $result = parent::deleteCallAnalyticsJob($args->toArray());
        return new DeleteCallAnalyticsJobResponse($result->toArray());
    }
}
