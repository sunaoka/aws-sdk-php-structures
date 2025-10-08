<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule;

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
