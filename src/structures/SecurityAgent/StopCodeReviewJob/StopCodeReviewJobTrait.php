<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StopCodeReviewJob;

trait StopCodeReviewJobTrait
{
    /**
     * @param StopCodeReviewJobRequest $args
     * @return StopCodeReviewJobResponse
     */
    public function stopCodeReviewJob(StopCodeReviewJobRequest $args)
    {
        $result = parent::stopCodeReviewJob($args->toArray());
        return new StopCodeReviewJobResponse($result->toArray());
    }
}
