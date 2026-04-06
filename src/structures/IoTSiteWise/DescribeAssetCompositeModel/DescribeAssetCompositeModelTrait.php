<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetCompositeModel;

trait DescribeAssetCompositeModelTrait
{
    /**
     * @param DescribeAssetCompositeModelRequest $args
     * @return DescribeAssetCompositeModelResponse
     */
    public function describeAssetCompositeModel(DescribeAssetCompositeModelRequest $args)
    {
        $result = parent::describeAssetCompositeModel($args->toArray());
        return new DescribeAssetCompositeModelResponse($result->toArray());
    }
}
