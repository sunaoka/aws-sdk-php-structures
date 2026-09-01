<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRules;

trait ListCustomDetectionRulesTrait
{
    /**
     * @param ListCustomDetectionRulesRequest $args
     * @return ListCustomDetectionRulesResponse
     */
    public function listCustomDetectionRules(ListCustomDetectionRulesRequest $args)
    {
        $result = parent::listCustomDetectionRules($args->toArray());
        return new ListCustomDetectionRulesResponse($result->toArray());
    }
}
