<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopDominantLanguageDetectionJob;

trait StopDominantLanguageDetectionJobTrait
{
    /**
     * @param StopDominantLanguageDetectionJobRequest $args
     * @return StopDominantLanguageDetectionJobResponse
     */
    public function stopDominantLanguageDetectionJob(StopDominantLanguageDetectionJobRequest $args)
    {
        $result = parent::stopDominantLanguageDetectionJob($args->toArray());
        return new StopDominantLanguageDetectionJobResponse($result->toArray());
    }
}
