<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AllowCustomRoutingTraffic;

trait AllowCustomRoutingTrafficTrait
{
    /**
     * @param AllowCustomRoutingTrafficRequest $args
     * @return void
     */
    public function allowCustomRoutingTraffic(AllowCustomRoutingTrafficRequest $args)
    {
        parent::allowCustomRoutingTraffic($args->toArray());
    }
}
