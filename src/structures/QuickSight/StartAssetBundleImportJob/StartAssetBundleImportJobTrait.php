<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob;

trait StartAssetBundleImportJobTrait
{
    /**
     * @param StartAssetBundleImportJobRequest $args
     * @return StartAssetBundleImportJobResponse
     */
    public function startAssetBundleImportJob(StartAssetBundleImportJobRequest $args)
    {
        $result = parent::startAssetBundleImportJob($args->toArray());
        return new StartAssetBundleImportJobResponse($result->toArray());
    }
}
