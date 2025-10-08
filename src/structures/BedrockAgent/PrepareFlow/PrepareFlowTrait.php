<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareFlow;

trait PrepareFlowTrait
{
    /**
     * @param PrepareFlowRequest $args
     * @return PrepareFlowResponse
     */
    public function prepareFlow(PrepareFlowRequest $args)
    {
        $result = parent::prepareFlow($args->toArray());
        return new PrepareFlowResponse($result->toArray());
    }
}
