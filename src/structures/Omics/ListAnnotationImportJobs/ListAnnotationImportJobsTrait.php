<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs;

trait ListAnnotationImportJobsTrait
{
    /**
     * @param ListAnnotationImportJobsRequest $args
     * @return ListAnnotationImportJobsResponse
     */
    public function listAnnotationImportJobs(ListAnnotationImportJobsRequest $args)
    {
        $result = parent::listAnnotationImportJobs($args->toArray());
        return new ListAnnotationImportJobsResponse($result->toArray());
    }
}
