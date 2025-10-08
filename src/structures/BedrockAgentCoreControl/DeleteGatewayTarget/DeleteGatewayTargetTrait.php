<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayTarget;

trait DeleteGatewayTargetTrait
{
    /**
     * @param DeleteGatewayTargetRequest $args
     * @return DeleteGatewayTargetResponse
     */
    public function deleteGatewayTarget(DeleteGatewayTargetRequest $args)
    {
        $result = parent::deleteGatewayTarget($args->toArray());
        return new DeleteGatewayTargetResponse($result->toArray());
    }
}
