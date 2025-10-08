<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopKeyPhrasesDetectionJob;

trait StopKeyPhrasesDetectionJobTrait
{
    /**
     * @param StopKeyPhrasesDetectionJobRequest $args
     * @return StopKeyPhrasesDetectionJobResponse
     */
    public function stopKeyPhrasesDetectionJob(StopKeyPhrasesDetectionJobRequest $args)
    {
        $result = parent::stopKeyPhrasesDetectionJob($args->toArray());
        return new StopKeyPhrasesDetectionJobResponse($result->toArray());
    }
}
