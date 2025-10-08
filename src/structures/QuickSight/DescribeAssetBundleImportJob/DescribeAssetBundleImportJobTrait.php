<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob;

trait DescribeAssetBundleImportJobTrait
{
    /**
     * @param DescribeAssetBundleImportJobRequest $args
     * @return DescribeAssetBundleImportJobResponse
     */
    public function describeAssetBundleImportJob(DescribeAssetBundleImportJobRequest $args)
    {
        $result = parent::describeAssetBundleImportJob($args->toArray());
        return new DescribeAssetBundleImportJobResponse($result->toArray());
    }
}
