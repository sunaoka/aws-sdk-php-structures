<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteRealtimeLogConfig;

trait DeleteRealtimeLogConfigTrait
{
    /**
     * @param DeleteRealtimeLogConfigRequest $args
     * @return void
     */
    public function deleteRealtimeLogConfig(DeleteRealtimeLogConfigRequest $args)
    {
        parent::deleteRealtimeLogConfig($args->toArray());
    }
}
