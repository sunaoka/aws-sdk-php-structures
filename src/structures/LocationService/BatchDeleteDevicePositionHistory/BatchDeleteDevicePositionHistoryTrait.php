<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchDeleteDevicePositionHistory;

trait BatchDeleteDevicePositionHistoryTrait
{
    /**
     * @param BatchDeleteDevicePositionHistoryRequest $args
     * @return BatchDeleteDevicePositionHistoryResponse
     */
    public function batchDeleteDevicePositionHistory(BatchDeleteDevicePositionHistoryRequest $args)
    {
        $result = parent::batchDeleteDevicePositionHistory($args->toArray());
        return new BatchDeleteDevicePositionHistoryResponse($result->toArray());
    }
}
