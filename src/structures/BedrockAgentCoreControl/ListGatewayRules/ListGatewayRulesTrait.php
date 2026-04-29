<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules;

trait ListGatewayRulesTrait
{
    /**
     * @param ListGatewayRulesRequest $args
     * @return ListGatewayRulesResponse
     */
    public function listGatewayRules(ListGatewayRulesRequest $args)
    {
        $result = parent::listGatewayRules($args->toArray());
        return new ListGatewayRulesResponse($result->toArray());
    }
}
