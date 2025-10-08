<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway;

trait GetGatewayTrait
{
    /**
     * @param GetGatewayRequest $args
     * @return GetGatewayResponse
     */
    public function getGateway(GetGatewayRequest $args)
    {
        $result = parent::getGateway($args->toArray());
        return new GetGatewayResponse($result->toArray());
    }
}
