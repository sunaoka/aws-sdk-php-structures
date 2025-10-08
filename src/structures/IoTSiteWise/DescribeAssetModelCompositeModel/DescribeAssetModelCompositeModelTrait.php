<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel;

trait DescribeAssetModelCompositeModelTrait
{
    /**
     * @param DescribeAssetModelCompositeModelRequest $args
     * @return DescribeAssetModelCompositeModelResponse
     */
    public function describeAssetModelCompositeModel(DescribeAssetModelCompositeModelRequest $args)
    {
        $result = parent::describeAssetModelCompositeModel($args->toArray());
        return new DescribeAssetModelCompositeModelResponse($result->toArray());
    }
}
