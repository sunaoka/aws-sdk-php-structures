<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoutingRule;

trait CreateRoutingRuleTrait
{
    /**
     * @param CreateRoutingRuleRequest $args
     * @return CreateRoutingRuleResponse
     */
    public function createRoutingRule(CreateRoutingRuleRequest $args)
    {
        $result = parent::createRoutingRule($args->toArray());
        return new CreateRoutingRuleResponse($result->toArray());
    }
}
