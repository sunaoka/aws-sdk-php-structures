<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDominantLanguageDetectionJob;

trait StartDominantLanguageDetectionJobTrait
{
    /**
     * @param StartDominantLanguageDetectionJobRequest $args
     * @return StartDominantLanguageDetectionJobResponse
     */
    public function startDominantLanguageDetectionJob(StartDominantLanguageDetectionJobRequest $args)
    {
        $result = parent::startDominantLanguageDetectionJob($args->toArray());
        return new StartDominantLanguageDetectionJobResponse($result->toArray());
    }
}
