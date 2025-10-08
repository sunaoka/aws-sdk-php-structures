<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow;

trait CreateFlowTrait
{
    /**
     * @param CreateFlowRequest $args
     * @return CreateFlowResponse
     */
    public function createFlow(CreateFlowRequest $args)
    {
        $result = parent::createFlow($args->toArray());
        return new CreateFlowResponse($result->toArray());
    }
}
