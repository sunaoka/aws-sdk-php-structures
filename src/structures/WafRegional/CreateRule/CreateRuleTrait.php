<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateRule;

trait CreateRuleTrait
{
    /**
     * @param CreateRuleRequest $args
     * @return CreateRuleResponse
     */
    public function createRule(CreateRuleRequest $args)
    {
        $result = parent::createRule($args->toArray());
        return new CreateRuleResponse($result->toArray());
    }
}
