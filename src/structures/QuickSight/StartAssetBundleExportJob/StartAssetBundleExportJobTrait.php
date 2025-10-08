<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob;

trait StartAssetBundleExportJobTrait
{
    /**
     * @param StartAssetBundleExportJobRequest $args
     * @return StartAssetBundleExportJobResponse
     */
    public function startAssetBundleExportJob(StartAssetBundleExportJobRequest $args)
    {
        $result = parent::startAssetBundleExportJob($args->toArray());
        return new StartAssetBundleExportJobResponse($result->toArray());
    }
}
