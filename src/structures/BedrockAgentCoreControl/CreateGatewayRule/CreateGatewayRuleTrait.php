<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule;

trait CreateGatewayRuleTrait
{
    /**
     * @param CreateGatewayRuleRequest $args
     * @return CreateGatewayRuleResponse
     */
    public function createGatewayRule(CreateGatewayRuleRequest $args)
    {
        $result = parent::createGatewayRule($args->toArray());
        return new CreateGatewayRuleResponse($result->toArray());
    }
}
