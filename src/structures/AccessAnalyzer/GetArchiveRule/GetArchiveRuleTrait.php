<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetArchiveRule;

trait GetArchiveRuleTrait
{
    /**
     * @param GetArchiveRuleRequest $args
     * @return GetArchiveRuleResponse
     */
    public function getArchiveRule(GetArchiveRuleRequest $args)
    {
        $result = parent::getArchiveRule($args->toArray());
        return new GetArchiveRuleResponse($result->toArray());
    }
}
