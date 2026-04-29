<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule;

trait UpdateGatewayRuleTrait
{
    /**
     * @param UpdateGatewayRuleRequest $args
     * @return UpdateGatewayRuleResponse
     */
    public function updateGatewayRule(UpdateGatewayRuleRequest $args)
    {
        $result = parent::updateGatewayRule($args->toArray());
        return new UpdateGatewayRuleResponse($result->toArray());
    }
}
