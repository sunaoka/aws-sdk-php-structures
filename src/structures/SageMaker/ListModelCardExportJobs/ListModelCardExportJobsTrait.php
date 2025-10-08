<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardExportJobs;

trait ListModelCardExportJobsTrait
{
    /**
     * @param ListModelCardExportJobsRequest $args
     * @return ListModelCardExportJobsResponse
     */
    public function listModelCardExportJobs(ListModelCardExportJobsRequest $args)
    {
        $result = parent::listModelCardExportJobs($args->toArray());
        return new ListModelCardExportJobsResponse($result->toArray());
    }
}
