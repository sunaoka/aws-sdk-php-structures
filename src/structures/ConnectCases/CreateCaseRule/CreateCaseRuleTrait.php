<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule;

trait CreateCaseRuleTrait
{
    /**
     * @param CreateCaseRuleRequest $args
     * @return CreateCaseRuleResponse
     */
    public function createCaseRule(CreateCaseRuleRequest $args)
    {
        $result = parent::createCaseRule($args->toArray());
        return new CreateCaseRuleResponse($result->toArray());
    }
}
