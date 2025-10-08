<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget;

trait UpdateGatewayTargetTrait
{
    /**
     * @param UpdateGatewayTargetRequest $args
     * @return UpdateGatewayTargetResponse
     */
    public function updateGatewayTarget(UpdateGatewayTargetRequest $args)
    {
        $result = parent::updateGatewayTarget($args->toArray());
        return new UpdateGatewayTargetResponse($result->toArray());
    }
}
