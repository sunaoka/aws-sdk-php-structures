<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule;

trait ModifyRuleTrait
{
    /**
     * @param ModifyRuleRequest $args
     * @return ModifyRuleResponse
     */
    public function modifyRule(ModifyRuleRequest $args)
    {
        $result = parent::modifyRule($args->toArray());
        return new ModifyRuleResponse($result->toArray());
    }
}
