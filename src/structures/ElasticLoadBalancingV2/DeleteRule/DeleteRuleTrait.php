<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteRule;

trait DeleteRuleTrait
{
    /**
     * @param DeleteRuleRequest $args
     * @return DeleteRuleResponse
     */
    public function deleteRule(DeleteRuleRequest $args)
    {
        $result = parent::deleteRule($args->toArray());
        return new DeleteRuleResponse($result->toArray());
    }
}
