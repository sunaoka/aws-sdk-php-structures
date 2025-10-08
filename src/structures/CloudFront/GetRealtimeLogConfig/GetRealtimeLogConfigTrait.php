<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetRealtimeLogConfig;

trait GetRealtimeLogConfigTrait
{
    /**
     * @param GetRealtimeLogConfigRequest $args
     * @return GetRealtimeLogConfigResponse
     */
    public function getRealtimeLogConfig(GetRealtimeLogConfigRequest $args)
    {
        $result = parent::getRealtimeLogConfig($args->toArray());
        return new GetRealtimeLogConfigResponse($result->toArray());
    }
}
