<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopFlow;

trait StopFlowTrait
{
    /**
     * @param StopFlowRequest $args
     * @return StopFlowResponse
     */
    public function stopFlow(StopFlowRequest $args)
    {
        $result = parent::stopFlow($args->toArray());
        return new StopFlowResponse($result->toArray());
    }
}
