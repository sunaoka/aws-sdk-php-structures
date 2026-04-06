<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets;

trait SynchronizeGatewayTargetsTrait
{
    /**
     * @param SynchronizeGatewayTargetsRequest $args
     * @return SynchronizeGatewayTargetsResponse
     */
    public function synchronizeGatewayTargets(SynchronizeGatewayTargetsRequest $args)
    {
        $result = parent::synchronizeGatewayTargets($args->toArray());
        return new SynchronizeGatewayTargetsResponse($result->toArray());
    }
}
