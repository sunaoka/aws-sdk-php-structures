<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow;

trait GetFlowTrait
{
    /**
     * @param GetFlowRequest $args
     * @return GetFlowResponse
     */
    public function getFlow(GetFlowRequest $args)
    {
        $result = parent::getFlow($args->toArray());
        return new GetFlowResponse($result->toArray());
    }
}
