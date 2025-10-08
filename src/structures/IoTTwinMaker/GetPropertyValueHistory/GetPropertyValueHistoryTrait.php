<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory;

trait GetPropertyValueHistoryTrait
{
    /**
     * @param GetPropertyValueHistoryRequest $args
     * @return GetPropertyValueHistoryResponse
     */
    public function getPropertyValueHistory(GetPropertyValueHistoryRequest $args)
    {
        $result = parent::getPropertyValueHistory($args->toArray());
        return new GetPropertyValueHistoryResponse($result->toArray());
    }
}
