<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetQueryStatus;

trait GetQueryStatusTrait
{
    /**
     * @param GetQueryStatusRequest $args
     * @return GetQueryStatusResponse
     */
    public function getQueryStatus(GetQueryStatusRequest $args)
    {
        $result = parent::getQueryStatus($args->toArray());
        return new GetQueryStatusResponse($result->toArray());
    }
}
