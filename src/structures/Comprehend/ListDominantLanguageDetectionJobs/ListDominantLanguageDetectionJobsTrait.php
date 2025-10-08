<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDominantLanguageDetectionJobs;

trait ListDominantLanguageDetectionJobsTrait
{
    /**
     * @param ListDominantLanguageDetectionJobsRequest $args
     * @return ListDominantLanguageDetectionJobsResponse
     */
    public function listDominantLanguageDetectionJobs(ListDominantLanguageDetectionJobsRequest $args)
    {
        $result = parent::listDominantLanguageDetectionJobs($args->toArray());
        return new ListDominantLanguageDetectionJobsResponse($result->toArray());
    }
}
