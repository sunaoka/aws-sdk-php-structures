<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValueHistory;

trait GetAssetPropertyValueHistoryTrait
{
    /**
     * @param GetAssetPropertyValueHistoryRequest $args
     * @return GetAssetPropertyValueHistoryResponse
     */
    public function getAssetPropertyValueHistory(GetAssetPropertyValueHistoryRequest $args)
    {
        $result = parent::getAssetPropertyValueHistory($args->toArray());
        return new GetAssetPropertyValueHistoryResponse($result->toArray());
    }
}
