<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateRuleGroup;

trait CreateRuleGroupTrait
{
    /**
     * @param CreateRuleGroupRequest $args
     * @return CreateRuleGroupResponse
     */
    public function createRuleGroup(CreateRuleGroupRequest $args)
    {
        $result = parent::createRuleGroup($args->toArray());
        return new CreateRuleGroupResponse($result->toArray());
    }
}
