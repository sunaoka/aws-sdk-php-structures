<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob;

trait StartMediaAnalysisJobTrait
{
    /**
     * @param StartMediaAnalysisJobRequest $args
     * @return StartMediaAnalysisJobResponse
     */
    public function startMediaAnalysisJob(StartMediaAnalysisJobRequest $args)
    {
        $result = parent::startMediaAnalysisJob($args->toArray());
        return new StartMediaAnalysisJobResponse($result->toArray());
    }
}
