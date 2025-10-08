<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartFlow;

trait StartFlowTrait
{
    /**
     * @param StartFlowRequest $args
     * @return StartFlowResponse
     */
    public function startFlow(StartFlowRequest $args)
    {
        $result = parent::startFlow($args->toArray());
        return new StartFlowResponse($result->toArray());
    }
}
