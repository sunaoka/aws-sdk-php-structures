<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayTargets;

trait ListGatewayTargetsTrait
{
    /**
     * @param ListGatewayTargetsRequest $args
     * @return ListGatewayTargetsResponse
     */
    public function listGatewayTargets(ListGatewayTargetsRequest $args)
    {
        $result = parent::listGatewayTargets($args->toArray());
        return new ListGatewayTargetsResponse($result->toArray());
    }
}
