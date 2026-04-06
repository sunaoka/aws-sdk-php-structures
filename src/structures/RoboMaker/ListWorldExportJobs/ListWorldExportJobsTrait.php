<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldExportJobs;

trait ListWorldExportJobsTrait
{
    /**
     * @param ListWorldExportJobsRequest $args
     * @return ListWorldExportJobsResponse
     */
    public function listWorldExportJobs(ListWorldExportJobsRequest $args)
    {
        $result = parent::listWorldExportJobs($args->toArray());
        return new ListWorldExportJobsResponse($result->toArray());
    }
}
