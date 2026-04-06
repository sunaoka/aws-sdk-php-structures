<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob;

trait GetMediaAnalysisJobTrait
{
    /**
     * @param GetMediaAnalysisJobRequest $args
     * @return GetMediaAnalysisJobResponse
     */
    public function getMediaAnalysisJob(GetMediaAnalysisJobRequest $args)
    {
        $result = parent::getMediaAnalysisJob($args->toArray());
        return new GetMediaAnalysisJobResponse($result->toArray());
    }
}
