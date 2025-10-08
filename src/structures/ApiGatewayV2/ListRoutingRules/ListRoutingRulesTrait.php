<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListRoutingRules;

trait ListRoutingRulesTrait
{
    /**
     * @param ListRoutingRulesRequest $args
     * @return ListRoutingRulesResponse
     */
    public function listRoutingRules(ListRoutingRulesRequest $args)
    {
        $result = parent::listRoutingRules($args->toArray());
        return new ListRoutingRulesResponse($result->toArray());
    }
}
