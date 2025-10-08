<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows;

trait ListChannelFlowsTrait
{
    /**
     * @param ListChannelFlowsRequest $args
     * @return ListChannelFlowsResponse
     */
    public function listChannelFlows(ListChannelFlowsRequest $args)
    {
        $result = parent::listChannelFlows($args->toArray());
        return new ListChannelFlowsResponse($result->toArray());
    }
}
