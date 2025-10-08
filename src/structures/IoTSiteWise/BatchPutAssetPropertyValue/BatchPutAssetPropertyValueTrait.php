<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchPutAssetPropertyValue;

trait BatchPutAssetPropertyValueTrait
{
    /**
     * @param BatchPutAssetPropertyValueRequest $args
     * @return BatchPutAssetPropertyValueResponse
     */
    public function batchPutAssetPropertyValue(BatchPutAssetPropertyValueRequest $args)
    {
        $result = parent::batchPutAssetPropertyValue($args->toArray());
        return new BatchPutAssetPropertyValueResponse($result->toArray());
    }
}
