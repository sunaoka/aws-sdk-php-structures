<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldGenerationJobs;

trait ListWorldGenerationJobsTrait
{
    /**
     * @param ListWorldGenerationJobsRequest $args
     * @return ListWorldGenerationJobsResponse
     */
    public function listWorldGenerationJobs(ListWorldGenerationJobsRequest $args)
    {
        $result = parent::listWorldGenerationJobs($args->toArray());
        return new ListWorldGenerationJobsResponse($result->toArray());
    }
}
