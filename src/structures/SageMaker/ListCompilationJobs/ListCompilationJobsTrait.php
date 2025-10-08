<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCompilationJobs;

trait ListCompilationJobsTrait
{
    /**
     * @param ListCompilationJobsRequest $args
     * @return ListCompilationJobsResponse
     */
    public function listCompilationJobs(ListCompilationJobsRequest $args)
    {
        $result = parent::listCompilationJobs($args->toArray());
        return new ListCompilationJobsResponse($result->toArray());
    }
}
