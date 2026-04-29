<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRule;

trait GetGatewayRuleTrait
{
    /**
     * @param GetGatewayRuleRequest $args
     * @return GetGatewayRuleResponse
     */
    public function getGatewayRule(GetGatewayRuleRequest $args)
    {
        $result = parent::getGatewayRule($args->toArray());
        return new GetGatewayRuleResponse($result->toArray());
    }
}
