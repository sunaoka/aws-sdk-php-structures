<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowFlush;

trait StartFlowFlushTrait
{
    /**
     * @param StartFlowFlushRequest $args
     * @return StartFlowFlushResponse
     */
    public function startFlowFlush(StartFlowFlushRequest $args)
    {
        $result = parent::startFlowFlush($args->toArray());
        return new StartFlowFlushResponse($result->toArray());
    }
}
