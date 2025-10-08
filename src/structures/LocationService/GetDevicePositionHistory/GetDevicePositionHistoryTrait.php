<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory;

trait GetDevicePositionHistoryTrait
{
    /**
     * @param GetDevicePositionHistoryRequest $args
     * @return GetDevicePositionHistoryResponse
     */
    public function getDevicePositionHistory(GetDevicePositionHistoryRequest $args)
    {
        $result = parent::getDevicePositionHistory($args->toArray());
        return new GetDevicePositionHistoryResponse($result->toArray());
    }
}
