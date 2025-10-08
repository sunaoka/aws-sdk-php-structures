<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateRealtimeLogConfig;

trait UpdateRealtimeLogConfigTrait
{
    /**
     * @param UpdateRealtimeLogConfigRequest $args
     * @return UpdateRealtimeLogConfigResponse
     */
    public function updateRealtimeLogConfig(UpdateRealtimeLogConfigRequest $args)
    {
        $result = parent::updateRealtimeLogConfig($args->toArray());
        return new UpdateRealtimeLogConfigResponse($result->toArray());
    }
}
