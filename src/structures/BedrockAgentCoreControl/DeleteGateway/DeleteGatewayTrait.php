<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGateway;

trait DeleteGatewayTrait
{
    /**
     * @param DeleteGatewayRequest $args
     * @return DeleteGatewayResponse
     */
    public function deleteGateway(DeleteGatewayRequest $args)
    {
        $result = parent::deleteGateway($args->toArray());
        return new DeleteGatewayResponse($result->toArray());
    }
}
