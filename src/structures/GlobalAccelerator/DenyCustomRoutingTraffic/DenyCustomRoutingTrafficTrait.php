<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DenyCustomRoutingTraffic;

trait DenyCustomRoutingTrafficTrait
{
    /**
     * @param DenyCustomRoutingTrafficRequest $args
     * @return void
     */
    public function denyCustomRoutingTraffic(DenyCustomRoutingTrafficRequest $args)
    {
        parent::denyCustomRoutingTraffic($args->toArray());
    }
}
