<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerLog;

trait GetContainerLogTrait
{
    /**
     * @param GetContainerLogRequest $args
     * @return GetContainerLogResponse
     */
    public function getContainerLog(GetContainerLogRequest $args)
    {
        $result = parent::getContainerLog($args->toArray());
        return new GetContainerLogResponse($result->toArray());
    }
}
