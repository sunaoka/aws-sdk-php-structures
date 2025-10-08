<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob;

trait DescribeAssetBundleExportJobTrait
{
    /**
     * @param DescribeAssetBundleExportJobRequest $args
     * @return DescribeAssetBundleExportJobResponse
     */
    public function describeAssetBundleExportJob(DescribeAssetBundleExportJobRequest $args)
    {
        $result = parent::describeAssetBundleExportJob($args->toArray());
        return new DescribeAssetBundleExportJobResponse($result->toArray());
    }
}
