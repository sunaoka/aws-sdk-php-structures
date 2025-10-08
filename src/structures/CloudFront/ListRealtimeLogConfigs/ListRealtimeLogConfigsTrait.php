<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListRealtimeLogConfigs;

trait ListRealtimeLogConfigsTrait
{
    /**
     * @param ListRealtimeLogConfigsRequest $args
     * @return ListRealtimeLogConfigsResponse
     */
    public function listRealtimeLogConfigs(ListRealtimeLogConfigsRequest $args)
    {
        $result = parent::listRealtimeLogConfigs($args->toArray());
        return new ListRealtimeLogConfigsResponse($result->toArray());
    }
}
