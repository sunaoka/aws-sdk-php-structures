<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue;

trait BatchGetAssetPropertyValueTrait
{
    /**
     * @param BatchGetAssetPropertyValueRequest $args
     * @return BatchGetAssetPropertyValueResponse
     */
    public function batchGetAssetPropertyValue(BatchGetAssetPropertyValueRequest $args)
    {
        $result = parent::batchGetAssetPropertyValue($args->toArray());
        return new BatchGetAssetPropertyValueResponse($result->toArray());
    }
}
