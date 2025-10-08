<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantImportJobs;

trait ListVariantImportJobsTrait
{
    /**
     * @param ListVariantImportJobsRequest $args
     * @return ListVariantImportJobsResponse
     */
    public function listVariantImportJobs(ListVariantImportJobsRequest $args)
    {
        $result = parent::listVariantImportJobs($args->toArray());
        return new ListVariantImportJobsResponse($result->toArray());
    }
}
