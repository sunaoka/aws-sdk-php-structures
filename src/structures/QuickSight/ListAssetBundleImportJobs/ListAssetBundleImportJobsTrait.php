<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleImportJobs;

trait ListAssetBundleImportJobsTrait
{
    /**
     * @param ListAssetBundleImportJobsRequest $args
     * @return ListAssetBundleImportJobsResponse
     */
    public function listAssetBundleImportJobs(ListAssetBundleImportJobsRequest $args)
    {
        $result = parent::listAssetBundleImportJobs($args->toArray());
        return new ListAssetBundleImportJobsResponse($result->toArray());
    }
}
