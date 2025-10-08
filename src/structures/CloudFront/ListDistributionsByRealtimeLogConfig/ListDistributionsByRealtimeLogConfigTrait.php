<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig;

trait ListDistributionsByRealtimeLogConfigTrait
{
    /**
     * @param ListDistributionsByRealtimeLogConfigRequest $args
     * @return ListDistributionsByRealtimeLogConfigResponse
     */
    public function listDistributionsByRealtimeLogConfig(ListDistributionsByRealtimeLogConfigRequest $args)
    {
        $result = parent::listDistributionsByRealtimeLogConfig($args->toArray());
        return new ListDistributionsByRealtimeLogConfigResponse($result->toArray());
    }
}
