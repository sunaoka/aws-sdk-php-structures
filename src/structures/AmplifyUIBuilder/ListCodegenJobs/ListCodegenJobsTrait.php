<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListCodegenJobs;

trait ListCodegenJobsTrait
{
    /**
     * @param ListCodegenJobsRequest $args
     * @return ListCodegenJobsResponse
     */
    public function listCodegenJobs(ListCodegenJobsRequest $args)
    {
        $result = parent::listCodegenJobs($args->toArray());
        return new ListCodegenJobsResponse($result->toArray());
    }
}
