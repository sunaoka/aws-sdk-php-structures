<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceImportJobs;

trait ListReferenceImportJobsTrait
{
    /**
     * @param ListReferenceImportJobsRequest $args
     * @return ListReferenceImportJobsResponse
     */
    public function listReferenceImportJobs(ListReferenceImportJobsRequest $args)
    {
        $result = parent::listReferenceImportJobs($args->toArray());
        return new ListReferenceImportJobsResponse($result->toArray());
    }
}
