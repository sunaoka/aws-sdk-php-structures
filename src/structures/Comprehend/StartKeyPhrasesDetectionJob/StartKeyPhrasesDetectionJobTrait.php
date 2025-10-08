<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartKeyPhrasesDetectionJob;

trait StartKeyPhrasesDetectionJobTrait
{
    /**
     * @param StartKeyPhrasesDetectionJobRequest $args
     * @return StartKeyPhrasesDetectionJobResponse
     */
    public function startKeyPhrasesDetectionJob(StartKeyPhrasesDetectionJobRequest $args)
    {
        $result = parent::startKeyPhrasesDetectionJob($args->toArray());
        return new StartKeyPhrasesDetectionJobResponse($result->toArray());
    }
}
