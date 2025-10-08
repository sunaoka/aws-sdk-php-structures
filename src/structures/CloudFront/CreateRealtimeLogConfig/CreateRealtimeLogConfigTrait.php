<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateRealtimeLogConfig;

trait CreateRealtimeLogConfigTrait
{
    /**
     * @param CreateRealtimeLogConfigRequest $args
     * @return CreateRealtimeLogConfigResponse
     */
    public function createRealtimeLogConfig(CreateRealtimeLogConfigRequest $args)
    {
        $result = parent::createRealtimeLogConfig($args->toArray());
        return new CreateRealtimeLogConfigResponse($result->toArray());
    }
}
