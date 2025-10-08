<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\ListRoutingControls;

trait ListRoutingControlsTrait
{
    /**
     * @param ListRoutingControlsRequest $args
     * @return ListRoutingControlsResponse
     */
    public function listRoutingControls(ListRoutingControlsRequest $args)
    {
        $result = parent::listRoutingControls($args->toArray());
        return new ListRoutingControlsResponse($result->toArray());
    }
}
