<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget;

trait CreateGatewayTargetTrait
{
    /**
     * @param CreateGatewayTargetRequest $args
     * @return CreateGatewayTargetResponse
     */
    public function createGatewayTarget(CreateGatewayTargetRequest $args)
    {
        $result = parent::createGatewayTarget($args->toArray());
        return new CreateGatewayTargetResponse($result->toArray());
    }
}
