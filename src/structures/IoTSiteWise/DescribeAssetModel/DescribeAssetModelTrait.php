<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

trait DescribeAssetModelTrait
{
    /**
     * @param DescribeAssetModelRequest $args
     * @return DescribeAssetModelResponse
     */
    public function describeAssetModel(DescribeAssetModelRequest $args)
    {
        $result = parent::describeAssetModel($args->toArray());
        return new DescribeAssetModelResponse($result->toArray());
    }
}
