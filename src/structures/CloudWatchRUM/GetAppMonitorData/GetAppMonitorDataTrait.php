<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData;

trait GetAppMonitorDataTrait
{
    /**
     * @param GetAppMonitorDataRequest $args
     * @return GetAppMonitorDataResponse
     */
    public function getAppMonitorData(GetAppMonitorDataRequest $args)
    {
        $result = parent::getAppMonitorData($args->toArray());
        return new GetAppMonitorDataResponse($result->toArray());
    }
}
