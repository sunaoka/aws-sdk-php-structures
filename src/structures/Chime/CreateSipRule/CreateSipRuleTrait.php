<?php

namespace Sunaoka\Aws\Structures\Chime\CreateSipRule;

trait CreateSipRuleTrait
{
    /**
     * @param CreateSipRuleRequest $args
     * @return CreateSipRuleResponse
     */
    public function createSipRule(CreateSipRuleRequest $args)
    {
        $result = parent::createSipRule($args->toArray());
        return new CreateSipRuleResponse($result->toArray());
    }
}
