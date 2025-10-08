<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRuleGroup;

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
