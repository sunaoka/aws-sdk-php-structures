<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory;

trait BatchGetAssetPropertyValueHistoryTrait
{
    /**
     * @param BatchGetAssetPropertyValueHistoryRequest $args
     * @return BatchGetAssetPropertyValueHistoryResponse
     */
    public function batchGetAssetPropertyValueHistory(BatchGetAssetPropertyValueHistoryRequest $args)
    {
        $result = parent::batchGetAssetPropertyValueHistory($args->toArray());
        return new BatchGetAssetPropertyValueHistoryResponse($result->toArray());
    }
}
