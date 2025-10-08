<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListRuleNamesByTarget;

trait ListRuleNamesByTargetTrait
{
    /**
     * @param ListRuleNamesByTargetRequest $args
     * @return ListRuleNamesByTargetResponse
     */
    public function listRuleNamesByTarget(ListRuleNamesByTargetRequest $args)
    {
        $result = parent::listRuleNamesByTarget($args->toArray());
        return new ListRuleNamesByTargetResponse($result->toArray());
    }
}
