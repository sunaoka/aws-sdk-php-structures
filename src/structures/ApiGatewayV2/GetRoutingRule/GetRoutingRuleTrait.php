<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRoutingRule;

trait GetRoutingRuleTrait
{
    /**
     * @param GetRoutingRuleRequest $args
     * @return GetRoutingRuleResponse
     */
    public function getRoutingRule(GetRoutingRuleRequest $args)
    {
        $result = parent::getRoutingRule($args->toArray());
        return new GetRoutingRuleResponse($result->toArray());
    }
}
