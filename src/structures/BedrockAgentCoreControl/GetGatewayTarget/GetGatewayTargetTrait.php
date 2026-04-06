<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget;

trait GetGatewayTargetTrait
{
    /**
     * @param GetGatewayTargetRequest $args
     * @return GetGatewayTargetResponse
     */
    public function getGatewayTarget(GetGatewayTargetRequest $args)
    {
        $result = parent::getGatewayTarget($args->toArray());
        return new GetGatewayTargetResponse($result->toArray());
    }
}
