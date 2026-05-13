<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartCodeReviewJob;

trait StartCodeReviewJobTrait
{
    /**
     * @param StartCodeReviewJobRequest $args
     * @return StartCodeReviewJobResponse
     */
    public function startCodeReviewJob(StartCodeReviewJobRequest $args)
    {
        $result = parent::startCodeReviewJob($args->toArray());
        return new StartCodeReviewJobResponse($result->toArray());
    }
}
