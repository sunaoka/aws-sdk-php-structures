<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRoutingRule;

trait DeleteRoutingRuleTrait
{
    /**
     * @param DeleteRoutingRuleRequest $args
     * @return void
     */
    public function deleteRoutingRule(DeleteRoutingRuleRequest $args)
    {
        parent::deleteRoutingRule($args->toArray());
    }
}
