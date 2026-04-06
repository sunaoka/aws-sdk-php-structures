<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule;

trait PutRoutingRuleTrait
{
    /**
     * @param PutRoutingRuleRequest $args
     * @return PutRoutingRuleResponse
     */
    public function putRoutingRule(PutRoutingRuleRequest $args)
    {
        $result = parent::putRoutingRule($args->toArray());
        return new PutRoutingRuleResponse($result->toArray());
    }
}
