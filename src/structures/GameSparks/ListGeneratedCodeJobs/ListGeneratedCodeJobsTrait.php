<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListGeneratedCodeJobs;

trait ListGeneratedCodeJobsTrait
{
    /**
     * @param ListGeneratedCodeJobsRequest $args
     * @return ListGeneratedCodeJobsResponse
     */
    public function listGeneratedCodeJobs(ListGeneratedCodeJobsRequest $args)
    {
        $result = parent::listGeneratedCodeJobs($args->toArray());
        return new ListGeneratedCodeJobsResponse($result->toArray());
    }
}
