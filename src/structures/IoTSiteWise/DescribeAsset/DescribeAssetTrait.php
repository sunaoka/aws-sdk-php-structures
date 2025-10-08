<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset;

trait DescribeAssetTrait
{
    /**
     * @param DescribeAssetRequest $args
     * @return DescribeAssetResponse
     */
    public function describeAsset(DescribeAssetRequest $args)
    {
        $result = parent::describeAsset($args->toArray());
        return new DescribeAssetResponse($result->toArray());
    }
}
