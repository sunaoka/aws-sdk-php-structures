<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleExportJobs;

trait ListAssetBundleExportJobsTrait
{
    /**
     * @param ListAssetBundleExportJobsRequest $args
     * @return ListAssetBundleExportJobsResponse
     */
    public function listAssetBundleExportJobs(ListAssetBundleExportJobsRequest $args)
    {
        $result = parent::listAssetBundleExportJobs($args->toArray());
        return new ListAssetBundleExportJobsResponse($result->toArray());
    }
}
