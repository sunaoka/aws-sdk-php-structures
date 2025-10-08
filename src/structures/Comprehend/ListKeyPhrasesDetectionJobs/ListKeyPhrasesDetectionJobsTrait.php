<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListKeyPhrasesDetectionJobs;

trait ListKeyPhrasesDetectionJobsTrait
{
    /**
     * @param ListKeyPhrasesDetectionJobsRequest $args
     * @return ListKeyPhrasesDetectionJobsResponse
     */
    public function listKeyPhrasesDetectionJobs(ListKeyPhrasesDetectionJobsRequest $args)
    {
        $result = parent::listKeyPhrasesDetectionJobs($args->toArray());
        return new ListKeyPhrasesDetectionJobsResponse($result->toArray());
    }
}
